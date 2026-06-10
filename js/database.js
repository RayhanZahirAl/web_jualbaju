/* ══════════════════════════════════════════
   DATA PRODUK
══════════════════════════════════════════ */
const PRODUCTS = [
  // ── Trucker Hat ──
  {
    id: 1,
    name: "Classic Chopper Trucker Hat",
    cat: "Trucker Hat",
    gender: "Unisex",
    price: 450000,
    badge: "new",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg",
      "img/workshirt.jpg"
    ],
    desc: "Trucker hat klasik Von Dutch dengan logo Chopper ikonik. Bahan mesh breathable dengan panel depan terstruktur. Adjuster snapback di belakang untuk kenyamanan maksimal."
  },
  {
    id: 2,
    name: "Foam Chopper Trucker Navy",
    cat: "Trucker Hat",
    gender: "Unisex",
    price: 420000,
    badge: "",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Versi foam dari trucker hat andalan Von Dutch. Warna navy dengan bordir logo depan dan adjuster metal di belakang."
  },
  {
    id: 3,
    name: "Denim Lowrider Strapback",
    cat: "Trucker Hat",
    gender: "Unisex",
    price: 315000,
    origPrice: 450000,
    badge: "sale",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Trucker hat bahan denim premium dengan desain lowrider. Strapback adjuster logam. Cocok dipadukan dengan berbagai outfit streetwear."
  },
  {
    id: 14,
    name: "MotoCross Strapback Hat",
    cat: "Trucker Hat",
    gender: "Unisex",
    price: 395000,
    badge: "popular",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Strapback hat dengan tema MotoCross Von Dutch. Bordir detail di depan dan samping. Panel depan terstruktur."
  },

  // ── Clothing ──
  {
    id: 4,
    name: "Mechanic Shirt Long Sleeve",
    cat: "Clothing",
    gender: "Men",
    price: 560000,
    badge: "new",
    sizes: ["S", "M", "L", "XL"],
    imgs: [
      "img/workshirt.jpg",
      "img/longsleev.jpg"
    ],
    desc: "Kemeja mechanic lengan panjang dengan detail patch Von Dutch. Bahan katun twill ringan. Tersedia dalam berbagai pilihan warna."
  },
  {
    id: 5,
    name: "Spider Crest Hoodie",
    cat: "Clothing",
    gender: "Unisex",
    price: 780000,
    badge: "new",
    sizes: ["S", "M", "L", "XL", "XXL"],
    imgs: [
      "img/longsleev.jpg"
    ],
    desc: "Hoodie premium dengan grafis Spider Crest Von Dutch. Fleece heavyweight 380gsm. Kantong kanguru depan dan drawstring adjustable."
  },
  {
    id: 6,
    name: "Core Mesh Shorts Razor Cut",
    cat: "Clothing",
    gender: "Men",
    price: 380000,
    badge: "",
    sizes: ["S", "M", "L", "XL"],
    imgs: [
      "img/workshirt.jpg"
    ],
    desc: "Celana pendek mesh ringan dan breathable dengan aksen Razor Cut khas Von Dutch. Cocok untuk aktivitas kasual maupun olahraga."
  },
  {
    id: 7,
    name: "Cropped Ribbed Tank Women",
    cat: "Clothing",
    gender: "Women",
    price: 295000,
    badge: "new",
    sizes: ["XS", "S", "M", "L"],
    imgs: [
      "img/longsleev.jpg"
    ],
    desc: "Tank top cropped berbahan ribbed stretch dengan logo Von Dutch minimalis di dada. Pas untuk gaya Y2K kamu sehari-hari."
  },
  {
    id: 8,
    name: "Short Sleeve Hell Shirt",
    cat: "Clothing",
    gender: "Men",
    price: 392000,
    origPrice: 560000,
    badge: "sale",
    sizes: ["S", "M", "L", "XL"],
    imgs: [
      "img/workshirt.jpg"
    ],
    desc: "Kemeja lengan pendek dengan grafis Hell motif khas Von Dutch. Bahan katun 100% ringan dan adem."
  },
  {
    id: 13,
    name: "Chopper Cross Studs Tee",
    cat: "Clothing",
    gender: "Unisex",
    price: 320000,
    badge: "popular",
    sizes: ["S", "M", "L", "XL"],
    imgs: [
      "img/workshirt.jpg"
    ],
    desc: "Kaos grafis Chopper Cross dengan detail studs metalik pada logo. Bahan cotton combed 30s. Cocok untuk tampilan casual."
  },
  {
    id: 16,
    name: "Baggy Contrast Graphic Tee",
    cat: "Clothing",
    gender: "Men",
    price: 365000,
    badge: "",
    sizes: ["S", "M", "L", "XL", "XXL"],
    imgs: [
      "img/longsleev.jpg"
    ],
    desc: "Kaos baggy oversized dengan grafis kontras Von Dutch. Bahan cotton fleece ringan. Fit oversized untuk tampilan street yang santai."
  },

  // ── Bags ──
  {
    id: 9,
    name: "Hanna Bag Forest Green",
    cat: "Bags",
    gender: "Unisex",
    price: 620000,
    badge: "new",
    sizes: ["One Size"],
    imgs: [
      "img/TOTEBAG.webp",
      "img/caps.jpg"
    ],
    desc: "Tas Hanna ikonik Von Dutch dalam warna Forest Green. Bahan canvas premium dengan resleting YKK. Muat laptop 13 inci dan perlengkapan harian."
  },
  {
    id: 10,
    name: "Chopper Cross Bowling Bag",
    cat: "Bags",
    gender: "Unisex",
    price: 434000,
    origPrice: 620000,
    badge: "sale",
    sizes: ["One Size"],
    imgs: [
      "img/TOTEBAG.webp"
    ],
    desc: "Tas bowling dengan motif Chopper Cross Von Dutch. Kapasitas luas dengan tali adjustable. Cocok untuk daily carry."
  },
  {
    id: 11,
    name: "Classic Sling Bag Black",
    cat: "Bags",
    gender: "Unisex",
    price: 540000,
    badge: "popular",
    sizes: ["One Size"],
    imgs: [
      "img/TOTEBAG.webp"
    ],
    desc: "Sling bag hitam dengan branding Von Dutch timbul di bagian depan. Kompartemen utama + kantong depan. Tali adjustable."
  },
  {
    id: 12,
    name: "Flying Eye Crossbody",
    cat: "Bags",
    gender: "Unisex",
    price: 475000,
    badge: "",
    sizes: ["One Size"],
    imgs: [
      "img/TOTEBAG.webp"
    ],
    desc: "Crossbody bag dengan emblem Flying Eye Von Dutch. Bahan nylon tahan air. Tali adjustable lintas bahu."
  },

  // ── Women ──
  {
    id: 15,
    name: "Women Ribbed Long Sleeve",
    cat: "Women",
    gender: "Women",
    price: 345000,
    badge: "new",
    sizes: ["XS", "S", "M", "L"],
    imgs: [
      "img/longsleev.jpg"
    ],
    desc: "Atasan lengan panjang ribbed untuk wanita. Bahan stretch nyaman dipakai seharian. Detail logo Von Dutch kecil di dada kiri."
  },

  // ── Men ──
  // (lihat Clothing gender Men di atas)

  // ── Accessories ──
  {
    id: 17,
    name: "Flying Eye Keychain",
    cat: "Accessories",
    gender: "Unisex",
    price: 125000,
    badge: "new",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Gantungan kunci metal dengan emblem Flying Eye ikonik Von Dutch. Finishing chrome mengkilap. Cocok sebagai koleksi atau hadiah."
  },
  {
    id: 18,
    name: "Von Dutch Leather Belt",
    cat: "Accessories",
    gender: "Unisex",
    price: 285000,
    badge: "popular",
    sizes: ["S", "M", "L", "XL"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Ikat pinggang kulit sintetis premium dengan gesper logo Von Dutch. Tersedia dalam ukuran S hingga XL. Cocok untuk tampilan kasual maupun semi-formal."
  },
  {
    id: 19,
    name: "Chopper Snapback Cap",
    cat: "Accessories",
    gender: "Unisex",
    price: 340000,
    badge: "",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Snapback cap dengan logo Chopper Von Dutch di panel depan. Bahan twill cotton tebal. Adjuster klik di belakang untuk kenyamanan maksimal."
  },
  {
    id: 20,
    name: "Von Dutch Sunglasses Retro",
    cat: "Accessories",
    gender: "Unisex",
    price: 420000,
    badge: "new",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Kacamata hitam retro dengan frame metal tipis dan lensa UV400. Dilengkapi pouch kain Von Dutch. Gaya Y2K yang timeless."
  },
  {
    id: 21,
    name: "Embroidered Patch Set",
    cat: "Accessories",
    gender: "Unisex",
    price: 175000,
    badge: "popular",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Set 3 patch bordir Von Dutch — logo Flying Eye, Chopper, dan Flame. Bisa dijahit atau disetrika ke jaket, tas, maupun celana."
  },
  {
    id: 22,
    name: "Von Dutch Cap Pin Set",
    cat: "Accessories",
    gender: "Unisex",
    price: 95000,
    badge: "",
    sizes: ["One Size"],
    imgs: [
      "img/caps.jpg"
    ],
    desc: "Set 2 pin enamel Von Dutch dengan desain logo klasik. Cocok dipasang di topi, jaket, atau tas. Finishing gloss berkualitas tinggi."
  },
  {
    id: 23,
    name: "Vintage Graphic Longsleeve",
    cat: "Clothing",
    gender: "Unisex",
    price: 350000,
    origPrice: 500000,
    badge: "sale",
    sizes: ["S", "M", "L", "XL"],
    imgs: [
      "img/longsleev.jpg"
    ],
    desc: "Kaos lengan panjang dengan grafis vintage Von Dutch. Bahan katun berkualitas tinggi yang nyaman dipakai untuk cuaca apapun."
  }
];