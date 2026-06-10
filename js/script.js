/* ══════════════════════════════════════════
   HELPER
══════════════════════════════════════════ */
function fmtPrice(n) {
  return 'Rp ' + n.toLocaleString('id-ID');
}


/* ══════════════════════════════════════════
   ROUTING
══════════════════════════════════════════ */
let currentPage     = 'home';
let currentFilter   = 'Semua';
let currentProductId = null;

function nav(page) {
  const target = document.getElementById('page-' + page);
  if (!target) {
    let url = page + '.php';
    if (page === 'home') url = 'index1.php';
    if (page === 'detail') url = 'produk.php'; // Memastikan mengarah ke produk.php
    window.location.href = url;
    return;
  }

  document.querySelectorAll('.page').forEach(p => p.classList && p.classList.remove('active'));
  if (target.classList) target.classList.add('active');
  document.querySelectorAll('.header-nav a').forEach(a => a.classList && a.classList.remove('active'));
  const lnk = document.getElementById('link-' + page);
  if (lnk && lnk.classList) lnk.classList.add('active');
  currentPage = page;
  window.scrollTo(0, 0);
  closeMobileMenu();

  if (page === 'shop') renderShop();
  if (page === 'sale') renderSale();
}

function goShop(filter) {
  const target = document.getElementById('page-shop');
  if (!target) {
    window.location.href = 'shop.php?filter=' + encodeURIComponent(filter);
    return;
  }
  setFilter(filter);
}


/* ══════════════════════════════════════════
   HERO SLIDER
══════════════════════════════════════════ */
let slideIdx = 0;
const slides = document.querySelectorAll('.hero-slide');
const dotsEl = document.getElementById('heroDots');

if (dotsEl && slides.length > 0) {
  slides.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 'hero-dot' + (i === 0 ? ' active' : '');
    d.onclick = () => goSlide(i);
    dotsEl.appendChild(d);
  });
}

function goSlide(i) {
  slides[slideIdx].classList.remove('active');
  dotsEl.children[slideIdx].classList.remove('active');
  slideIdx = i;
  slides[slideIdx].classList.add('active');
  dotsEl.children[slideIdx].classList.add('active');
}

if (slides.length > 0) {
  setInterval(() => goSlide((slideIdx + 1) % slides.length), 4500);
}


/* ══════════════════════════════════════════
   PRODUCT CARD
══════════════════════════════════════════ */
const BADGE_CLASS = { new: 'badge-new', sale: 'badge-sale', popular: 'badge-popular' };
const BADGE_LABEL = { new: 'Baru', sale: 'Sale', popular: 'Populer' };

function cardHTML(p, onclick) {
  const priceStr = p.origPrice
    ? `<span class="pcard-price"><s>${fmtPrice(p.origPrice)}</s> ${fmtPrice(p.price)}</span>`
    : `<span class="pcard-price">${fmtPrice(p.price)}</span>`;
  const badge = p.badge
    ? `<div class="pcard-badge ${BADGE_CLASS[p.badge]}">${BADGE_LABEL[p.badge]}</div>`
    : '';
  return `
    <div class="col-6 col-md-4 col-lg-3">
      <div class="pcard" onclick="${onclick}">
        <div class="pcard-img">
          <img src="${p.imgs[0]}" alt="${p.name}" loading="lazy"/>
          ${badge}
        </div>
        <div class="pcard-brand">Von Dutch</div>
        <div class="pcard-name">${p.name}</div>
        ${priceStr}
      </div>
    </div>`;
}


/* ══════════════════════════════════════════
   HOME
══════════════════════════════════════════ */
function renderHome() {
  const featured    = PRODUCTS.filter(p => ['new', 'popular'].includes(p.badge)).slice(0, 6);
  const newArrivals = PRODUCTS.filter(p => p.badge === 'new').slice(0, 4);
  
  const fEl = document.getElementById('homeFeatured');
  const nEl = document.getElementById('homeNew');
  if (fEl) fEl.innerHTML = featured.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');
  if (nEl) nEl.innerHTML = newArrivals.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');

  // Render Tabel Produk di Home
  const tEl = document.getElementById('productTableBody');
  if (tEl) {
    const tableData = PRODUCTS.slice(0, 8); // Menampilkan 8 produk pertama
    tEl.innerHTML = tableData.map((p, i) => `
      <tr>
        <td>${i + 1}</td>
        <td><span class="fw-semibold">${p.name}</span></td>
        <td><span class="badge bg-light text-dark border">${p.cat}</span></td>
        <td>${fmtPrice(p.price)}</td>
        <td class="text-center">
          <button class="btn btn-sm btn-dark px-3" onclick="openDetail(${p.id})">Lihat</button>
        </td>
      </tr>
    `).join('');
  }
}


/* ══════════════════════════════════════════
   SHOP
══════════════════════════════════════════ */
function setFilter(f) {
  currentFilter = f;
  document.querySelectorAll('.filter-tab').forEach(t => {
    t.classList.toggle('active', t.textContent === f);
  });
  renderShop();
}

function renderShop() {
  const grid = document.getElementById('shopGrid');
  if (!grid) return;

  let list = currentFilter === 'Semua'
    ? PRODUCTS
    : PRODUCTS.filter(p => p.cat === currentFilter || p.gender === currentFilter);

  const sort = document.getElementById('sortSelect')?.value || 'default';
  if (sort === 'low')  list = [...list].sort((a, b) => a.price - b.price);
  if (sort === 'high') list = [...list].sort((a, b) => b.price - a.price);
  if (sort === 'name') list = [...list].sort((a, b) => a.name.localeCompare(b.name));

  const countEl = document.getElementById('shopCount');
  if (countEl) countEl.textContent = list.length + ' produk';
  
  const titleEl = document.getElementById('shopPageTitle');
  if (titleEl) titleEl.textContent = currentFilter === 'Semua' ? 'Semua Produk' : currentFilter;
  
  const breadEl = document.getElementById('shopBreadcrumb');
  if (breadEl) breadEl.textContent = currentFilter === 'Semua' ? 'Semua Produk' : currentFilter;

  grid.innerHTML        = list.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');
}


/* ══════════════════════════════════════════
   SALE
══════════════════════════════════════════ */
function renderSale() {
  const list = PRODUCTS.filter(p => p.badge === 'sale');
  const grid = document.getElementById('saleGrid');
  if (grid) grid.innerHTML = list.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');
}


/* ══════════════════════════════════════════
   DETAIL PRODUK
══════════════════════════════════════════ */
let selectedSize = '';
let qty = 1;

function openDetail(id) {
  const target = document.getElementById('page-detail');
  // Jika tidak di halaman produk.php, pindah halaman sambil bawa ID
  if (!target) {
    window.location.href = 'produk.php?id=' + id;
    return;
  }

  const p = PRODUCTS.find(x => x.id === id);
  if (!p) return;

  currentProductId = id;
  selectedSize     = p.sizes[0] || '';
  qty              = 1;

  document.getElementById('detailName').textContent  = p.name;
  document.getElementById('detailPrice').textContent = fmtPrice(p.price);
  document.getElementById('detailDesc').textContent  = p.desc;
  
  const qtyEl = document.getElementById('qtyVal');
  if (qtyEl) qtyEl.value = 1;

  const origEl = document.getElementById('detailPriceOrig');
  origEl.innerHTML = p.origPrice
    ? `<div class="detail-price-orig">${fmtPrice(p.origPrice)}</div>`
    : '';

  document.getElementById('detailBadges').innerHTML = p.badge
    ? `<span class="detail-badge ${BADGE_CLASS[p.badge]}">${BADGE_LABEL[p.badge]}</span>`
    : '';

  document.getElementById('detailMainImg').src = p.imgs[0];

  document.getElementById('detailThumbs').innerHTML = p.imgs.map((img, i) =>
    `<div class="thumb${i === 0 ? ' active' : ''}" onclick="switchImg('${img}',this)">
       <img src="${img}" loading="lazy"/>
     </div>`
  ).join('');

  const sizeSection = document.getElementById('sizeSection');
  if (p.sizes.length <= 1 && p.sizes[0] === 'One Size') {
    sizeSection.style.display = 'none';
  } else {
    sizeSection.style.display = 'block';
    document.getElementById('sizeRow').innerHTML = p.sizes.map(s =>
      `<button class="size-btn${s === selectedSize ? ' active' : ''}" onclick="selectSize('${s}',this)">${s}</button>`
    ).join('');
  }

  document.getElementById('detailBreadcrumb').innerHTML =
    `<span onclick="nav('home')">Home</span>
     <span class="sep">/</span>
     <span onclick="goShop('${p.cat}')">${p.cat}</span>
     <span class="sep">/</span>
     <span class="current">${p.name}</span>`;

  const related = PRODUCTS.filter(x => x.cat === p.cat && x.id !== id).slice(0, 4);
  document.getElementById('relatedGrid').innerHTML = related.map(x => cardHTML(x, `openDetail(${x.id})`)).join('');

  nav('detail');
}

function switchImg(src, el) {
  document.getElementById('detailMainImg').src = src;
  document.querySelectorAll('#detailThumbs .thumb').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

function selectSize(s, el) {
  selectedSize = s;
  document.querySelectorAll('#sizeRow .size-btn').forEach(b => b.classList.remove('active'));
  el.classList.add('active');
}

/* ══════════════════════════════════════════
   AUTH MODAL LOGIC
══════════════════════════════════════════ */
function openAuthModal(mode = 'login') {
    const overlay = document.getElementById('authOverlay');
    if (overlay) overlay.classList.add('active');
    switchAuthTab(mode);
    document.body.style.overflow = 'hidden'; // Prevent scroll
}

function closeAuthModal() {
    const overlay = document.getElementById('authOverlay');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = ''; // Restore scroll
}

function switchAuthTab(mode) {
    const loginForm = document.getElementById('formLogin');
    const registerForm = document.getElementById('formRegister');
    const loginTab = document.getElementById('tabLogin');
    const registerTab = document.getElementById('tabRegister');
    
    if (mode === 'login') {
        if(loginForm) loginForm.style.display = 'block';
        if(registerForm) registerForm.style.display = 'none';
        if(loginTab) loginTab.classList.add('active');
        if(registerTab) registerTab.classList.remove('active');
    } else {
        if(loginForm) loginForm.style.display = 'none';
        if(registerForm) registerForm.style.display = 'block';
        if(loginTab) loginTab.classList.remove('active');
        if(registerTab) registerTab.classList.add('active');
    }
}

function changeQty(d) {
  qty = Math.max(1, qty + d);
  document.getElementById('qtyVal').value = qty;
}


/* ══════════════════════════════════════════
   ACCORDION
══════════════════════════════════════════ */
function toggleAcc(head) {
  const item   = head.closest('.acc-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.acc-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}


/* ══════════════════════════════════════════
   TOAST
══════════════════════════════════════════ */
let toastTimer;
function toast(msg) {
  const el = document.getElementById('toast');
  el.textContent = msg;
  el.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => el.classList.remove('show'), 2800);
}


/* ══════════════════════════════════════════
   MOBILE MENU
══════════════════════════════════════════ */
function toggleMenu() {
  const menu = document.getElementById('mobileMenu');
  if (menu) menu.classList.toggle('open');
}
function closeMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  if (menu) menu.classList.remove('open');
}


/* ══════════════════════════════════════════
   BACK TO TOP
══════════════════════════════════════════ */
window.addEventListener('scroll', () => {
  const btt = document.getElementById('btt');
  if (btt) btt.classList.toggle('show', window.scrollY > 320);
});


/* ══════════════════════════════════════════
   INIT
══════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);
  
  // Handle Filter dari URL (untuk halaman shop)
  const filterParam = params.get('filter');
  if (filterParam && document.getElementById('page-shop')) {
    currentFilter = filterParam;
  }

  // Handle Detail dari URL (untuk halaman produk)
  const productId = params.get('id');
  if (productId && document.getElementById('page-detail')) {
    openDetail(parseInt(productId));
  }

  const updateActiveLink = (id) => {
    document.querySelectorAll('.header-nav a').forEach(a => a.classList.remove('active'));
    document.getElementById('link-' + id)?.classList.add('active');
  };

  if (document.getElementById('page-home')) { renderHome(); updateActiveLink('home'); }
  if (document.getElementById('page-shop')) { renderShop(); updateActiveLink('shop'); }
  if (document.getElementById('page-sale')) { renderSale(); updateActiveLink('sale'); }
  // Untuk detail produk, highlight tetap di menu 'shop'
  if (document.getElementById('page-detail')) { updateActiveLink('shop'); }
  if (document.getElementById('page-about')) { updateActiveLink('about'); }
});