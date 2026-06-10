/* --- Helper: Fungsi untuk memformat angka menjadi mata uang Rupiah --- */
function fmtPrice(n) {
  return 'Rp ' + n.toLocaleString('id-ID'); // Contoh: 450000 jadi Rp 450.000
}

/* --- Routing & Navigasi --- */
let currentPage     = 'home';    // Menyimpan halaman yang sedang aktif
let currentFilter   = 'Semua';   // Menyimpan filter kategori yang dipilih
let currentProductId = null;      // Menyimpan ID produk yang sedang dilihat detailnya

function nav(page) {
  const target = document.getElementById('page-' + page); // Mencari elemen halaman di DOM
  
  // Jika elemen halaman tidak ditemukan di file saat ini, arahkan ke file .php yang sesuai
  if (!target) {
    let url = page + '.php';
    if (page === 'home') url = 'index1.php';
    if (page === 'detail') url = 'produk.php'; 
    window.location.href = url;
    return;
  }

  // Jika elemen ada di halaman yang sama (Single Page Behavior)
  // Sembunyikan semua halaman lain
  document.querySelectorAll('.page').forEach(p => p.classList && p.classList.remove('active'));
  // Tampilkan halaman target
  if (target.classList) target.classList.add('active');
  // Update menu navigasi yang aktif di header
  document.querySelectorAll('.header-nav a').forEach(a => a.classList && a.classList.remove('active'));
  const lnk = document.getElementById('link-' + page);
  if (lnk && lnk.classList) lnk.classList.add('active');
  currentPage = page;
  window.scrollTo(0, 0);
  closeMobileMenu();

  // Jalankan fungsi render data sesuai halaman
  if (page === 'shop') renderShop();
  if (page === 'sale') renderSale();
}

// Fungsi untuk pindah ke halaman Shop dengan filter tertentu (misal dari Footer)
function goShop(filter) {
  const target = document.getElementById('page-shop');
  if (!target) {
    // Jika tidak di file shop.php, pindah halaman dengan parameter di URL
    window.location.href = 'shop.php?filter=' + encodeURIComponent(filter);
    return;
  }
  setFilter(filter); // Jika sudah di shop.php, langsung ganti filter
}

/* --- Logika Hero Slider (Gambar Bergeser di Home) --- */
let slideIdx = 0;
const slides = document.querySelectorAll('.hero-slide'); // Ambil semua elemen slide
const dotsEl = document.getElementById('heroDots');     // Kontainer titik navigasi

// Membuat titik navigasi (dots) secara otomatis berdasarkan jumlah slide
if (dotsEl && slides.length > 0) {
  slides.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 'hero-dot' + (i === 0 ? ' active' : '');
    d.onclick = () => goSlide(i); // Klik titik untuk pindah slide
    dotsEl.appendChild(d);
  });
}

function goSlide(i) {
  slides[slideIdx].classList.remove('active');           // Hapus status aktif slide lama
  dotsEl.children[slideIdx].classList.remove('active');  // Hapus status aktif dot lama
  slideIdx = i;                                          // Update index slide
  slides[slideIdx].classList.add('active');              // Aktifkan slide baru
  dotsEl.children[slideIdx].classList.add('active');     // Aktifkan dot baru
}

// Jalankan slider otomatis setiap 4.5 detik
if (slides.length > 0) {
  setInterval(() => goSlide((slideIdx + 1) % slides.length), 4500);
}

/* --- Template Kartu Produk (Reusable HTML) --- */
const BADGE_CLASS = { new: 'badge-new', sale: 'badge-sale', popular: 'badge-popular' };
const BADGE_LABEL = { new: 'Baru', sale: 'Sale', popular: 'Populer' };

function cardHTML(p, onclick) {
  // Logika menampilkan harga diskon jika ada origPrice
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


/* --- Fungsi Render Halaman Home --- */
function renderHome() {
  // Ambil produk bertanda 'new' atau 'popular'
  const featured    = PRODUCTS.filter(p => ['new', 'popular'].includes(p.badge)).slice(0, 6);
  // Ambil produk bertanda 'new' saja
  const newArrivals = PRODUCTS.filter(p => p.badge === 'new').slice(0, 4);
  
  const fEl = document.getElementById('homeFeatured');
  const nEl = document.getElementById('homeNew');
  // Masukkan HTML kartu produk ke kontainer yang ada di index1.php
  if (fEl) fEl.innerHTML = featured.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');
  if (nEl) nEl.innerHTML = newArrivals.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');

  // Ambil elemen body tabel
  const tEl = document.getElementById('productTableBody');
  if (tEl) {
    // Ambil 8 produk pertama dari database untuk ringkasan di Home
    const tableData = PRODUCTS.slice(0, 8);
    // Map data menjadi baris HTML tabel (tr) 
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
} // Penutup fungsi renderHome yang sebelumnya terputus

/* --- Fungsi Filter & Render Halaman Shop --- */
function setFilter(f) {
  currentFilter = f; // Simpan kategori yang dipilih
  // Update tampilan tombol filter mana yang aktif
  document.querySelectorAll('.filter-tab').forEach(t => {
    t.classList.toggle('active', t.textContent === f);
  });
  renderShop(); // Gambar ulang produk di grid
}

function renderShop() {
  const grid = document.getElementById('shopGrid');
  if (!grid) return;

  // Filter data berdasarkan kategori atau gender (diambil dari database.js)
  let list = currentFilter === 'Semua'
    ? PRODUCTS
    : PRODUCTS.filter(p => p.cat === currentFilter || p.gender === currentFilter);

  // Logika pengurutan harga/nama (jika ada select sort)
  const sort = document.getElementById('sortSelect')?.value || 'default';
  if (sort === 'low')  list = [...list].sort((a, b) => a.price - b.price);
  if (sort === 'high') list = [...list].sort((a, b) => b.price - a.price);
  if (sort === 'name') list = [...list].sort((a, b) => a.name.localeCompare(b.name));

  // Update teks jumlah produk dan judul halaman
  const countEl = document.getElementById('shopCount');
  if (countEl) countEl.textContent = list.length + ' produk';
  
  const titleEl = document.getElementById('shopPageTitle');
  if (titleEl) titleEl.textContent = currentFilter === 'Semua' ? 'Semua Produk' : currentFilter;
  
  const breadEl = document.getElementById('shopBreadcrumb');
  if (breadEl) breadEl.textContent = currentFilter === 'Semua' ? 'Semua Produk' : currentFilter;

  grid.innerHTML = list.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');
} // Penutup fungsi renderShop yang sebelumnya terputus

/* --- Fungsi Render Halaman Sale --- */
function renderSale() {
  // Hanya ambil produk yang badge-nya 'sale'
  const list = PRODUCTS.filter(p => p.badge === 'sale');
  const grid = document.getElementById('saleGrid');
  if (grid) grid.innerHTML = list.map(p => cardHTML(p, `openDetail(${p.id})`)).join('');
}

/* --- Fungsi Menampilkan Detail Produk --- */
let selectedSize = ''; // Menyimpan ukuran yang dipilih user
let qty = 1;

function openDetail(id) {
  const target = document.getElementById('page-detail');
  // Jika user klik produk dari beranda/shop, pindah halaman ke produk.php dengan parameter ID
  if (!target) {
    window.location.href = 'produk.php?id=' + id;
    return;
  }

  // Cari data produk di database.js berdasarkan ID
  const p = PRODUCTS.find(x => x.id === id);
  if (!p) return;

  currentProductId = id;
  selectedSize     = p.sizes[0] || ''; // Default ukuran pertama
  qty              = 1;

  // Isi elemen HTML dengan data produk
  document.getElementById('detailName').textContent  = p.name;
  document.getElementById('detailPrice').textContent = fmtPrice(p.price);
  document.getElementById('detailDesc').textContent  = p.desc;
  
  const qtyEl = document.getElementById('qtyVal');
  if (qtyEl) qtyEl.value = 1;

  const origEl = document.getElementById('detailPriceOrig');
  origEl.innerHTML = p.origPrice // Tampilkan harga coret jika sedang sale
    ? `<div class="detail-price-orig">${fmtPrice(p.origPrice)}</div>`
    : '';

  document.getElementById('detailBadges').innerHTML = p.badge
    ? `<span class="detail-badge ${BADGE_CLASS[p.badge]}">${BADGE_LABEL[p.badge]}</span>`
    : '';

  document.getElementById('detailMainImg').src = p.imgs[0]; // Set gambar utama

  // Render thumbnail gambar
  document.getElementById('detailThumbs').innerHTML = p.imgs.map((img, i) =>
    `<div class="thumb${i === 0 ? ' active' : ''}" onclick="switchImg('${img}',this)">
       <img src="${img}" loading="lazy"/>
     </div>`
  ).join('');

  // Logika menyembunyikan pilihan ukuran jika produk cuma "One Size" (misal topi)
  const sizeSection = document.getElementById('sizeSection');
  if (p.sizes.length <= 1 && p.sizes[0] === 'One Size') {
    sizeSection.style.display = 'none';
  } else {
    sizeSection.style.display = 'block';
    document.getElementById('sizeRow').innerHTML = p.sizes.map(s => // Buat tombol ukuran
      `<button class="size-btn${s === selectedSize ? ' active' : ''}" onclick="selectSize('${s}',this)">${s}</button>`
    ).join('');
  }

  document.getElementById('detailBreadcrumb').innerHTML =
    `<span onclick="nav('home')">Home</span>
     <span class="sep">/</span>
     <span onclick="goShop('${p.cat}')">${p.cat}</span>
     <span class="sep">/</span>
     <span class="current">${p.name}</span>`;

  // Cari dan tampilkan produk lain dengan kategori yang sama (Related Products)
  const related = PRODUCTS.filter(x => x.cat === p.cat && x.id !== id).slice(0, 4);
  document.getElementById('relatedGrid').innerHTML = related.map(x => cardHTML(x, `openDetail(${x.id})`)).join('');

  nav('detail'); // Ganti view ke halaman detail
}

function switchImg(src, el) { // Ganti gambar utama saat thumbnail diklik
  document.getElementById('detailMainImg').src = src;
  document.querySelectorAll('#detailThumbs .thumb').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

function selectSize(s, el) { // Update variabel ukuran yang dipilih
  selectedSize = s;
  document.querySelectorAll('#sizeRow .size-btn').forEach(b => b.classList.remove('active'));
  el.classList.add('active');
}

/* --- Logika Modal Login/Daftar --- */
function openAuthModal(mode = 'login') {
    const overlay = document.getElementById('authOverlay');
    if (overlay) overlay.classList.add('active'); // Tampilkan modal
    switchAuthTab(mode);
    document.body.style.overflow = 'hidden'; // Matikan scroll background
}

function closeAuthModal() {
    const overlay = document.getElementById('authOverlay');
    if (overlay) overlay.classList.remove('active'); // Sembunyikan modal
    document.body.style.overflow = ''; // Kembalikan scroll
}

function switchAuthTab(mode) { // Berpindah antara form Login dan Daftar
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

function changeQty(d) { // Mengubah jumlah (quantity) produk
  qty = Math.max(1, qty + d);
  document.getElementById('qtyVal').value = qty;
}

/* --- Logika Accordion (Menu Lipat) di Detail Produk --- */
function toggleAcc(head) {
  const item   = head.closest('.acc-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.acc-item').forEach(i => i.classList.remove('open')); // Tutup semua yang lain
  if (!isOpen) item.classList.add('open');
}

/* --- Sistem Notifikasi (Toast) --- */
let toastTimer;
function toast(msg) {
  const el = document.getElementById('toast');
  el.textContent = msg;
  el.classList.add('show'); // Tampilkan notifikasi hitam di bawah
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => el.classList.remove('show'), 2800); // Hilang otomatis
}

/* --- Menu Mobile --- */
function toggleMenu() {
  const menu = document.getElementById('mobileMenu');
  if (menu) menu.classList.toggle('open');
}
function closeMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  if (menu) menu.classList.remove('open');
}

/* --- Tombol Back To Top --- */
window.addEventListener('scroll', () => {
  const btt = document.getElementById('btt');
  if (btt) btt.classList.toggle('show', window.scrollY > 320); // Muncul jika sudah scroll 320px
});

/* --- Inisialisasi Saat Website Dimuat --- */
document.addEventListener('DOMContentLoaded', () => {
  // Tangkap parameter dari URL (misal: ?id=1 atau ?filter=Bags)
  const params = new URLSearchParams(window.location.search);
  
  // Jika ada filter di URL, set filter shop
  const filterParam = params.get('filter');
  if (filterParam && document.getElementById('page-shop')) {
    currentFilter = filterParam;
  }

  // Jika ada ID produk di URL, buka halaman detail produk tersebut
  const productId = params.get('id');
  if (productId && document.getElementById('page-detail')) {
    openDetail(parseInt(productId));
  }

  // Fungsi kecil untuk update garis aktif di navigasi header
  const updateActiveLink = (id) => {
    document.querySelectorAll('.header-nav a').forEach(a => a.classList.remove('active'));
    document.getElementById('link-' + id)?.classList.add('active');
  };

  // Cek kita ada di halaman mana sekarang berdasarkan ID elemen unik di file PHP
  if (document.getElementById('page-home')) { renderHome(); updateActiveLink('home'); }
  if (document.getElementById('page-shop')) { renderShop(); updateActiveLink('shop'); }
  if (document.getElementById('page-sale')) { renderSale(); updateActiveLink('sale'); }
  if (document.getElementById('page-detail')) { updateActiveLink('shop'); }
  if (document.getElementById('page-about')) { updateActiveLink('about'); }
});