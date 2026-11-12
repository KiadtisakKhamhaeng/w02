<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Assignment · 千本桜</title>

<!-- ฟอนต์ Prompt (ไทย) และ Noto Serif JP (ญี่ปุ่น) -->
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;800&family=Noto+Serif+JP:wght@600;900&display=swap" rel="stylesheet">

<!-- Tailwind CSS v4 (เวอร์ชันสำหรับเบราว์เซอร์) -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<!-- ตั้งค่า Tailwind v4 เป็น CSS: เพิ่มสี ฟอนต์ แอนิเมชันของเราเอง แล้วเรียกเป็นคลาสได้ เช่น text-sakura, font-jp, animate-fall -->
<style type="text/tailwindcss">
  /* ให้คลาส dark: ทำงานเมื่อ <html> มีคลาส "dark" */
  @custom-variant dark (&:where(.dark, .dark *));
  @theme {
    --color-sakura: #d9437f;
    --color-sakura-deep: #a82a5f;
    --color-sakura-light: #ff7fae;
    --color-sakura-pale: #ffd9e6;
    --font-th: Prompt, system-ui, sans-serif;
    --font-jp: "Noto Serif JP", serif;
    --animate-marquee: marquee 28s linear infinite;
    --animate-fadein: fadein .6s ease;
    --animate-fall: fall 10s linear infinite;
    --animate-slash: slash 8s linear infinite;
    @keyframes marquee { to { transform: translateX(-50%); } }
    @keyframes fadein  { from { opacity: 0; transform: translateX(-24px); } to { opacity: 1; transform: none; } }
    @keyframes fall    { to { transform: translate3d(var(--dx), 110vh, 0) rotate(540deg); } }
    @keyframes slash   { from { transform: translate3d(0,0,0) rotate(25deg); } to { transform: translate3d(-45vw,125vh,0) rotate(25deg); } }
  }
</style>

<!-- เปิดโหมดมืดตั้งแต่โหลด (ตามที่เคยเลือก หรือตามค่าเครื่อง) -->
<script>
try{var t=localStorage.getItem('theme');if(t==='dark'||(!t&&matchMedia('(prefers-color-scheme: dark)').matches))document.documentElement.classList.add('dark')}catch(e){}
</script>
</head>

<body class="font-th min-h-screen overflow-x-hidden bg-rose-50 text-[#2a1020] dark:bg-[#0d0911] dark:text-rose-50 pt-[env(safe-area-inset-top)] pb-[env(safe-area-inset-bottom)] transition-colors">

<!-- แถบบน: โลโก้ + ปุ่มสลับธีม -->
<div class="relative z-[2] flex justify-between items-center px-5 md:px-10 py-5">
  <a href="index.php" class="font-jp font-black text-xl text-sakura dark:text-sakura-light">Word</a>
  <button id="theme" class="text-xl" aria-label="สลับธีม">🌙</button>
</div>

<!-- เมนู: มือถืออยู่แถบล่าง / จอใหญ่ (md:) อยู่แนวตั้งชิดขวา -->
<nav class="fixed z-50 bottom-0 inset-x-0 flex justify-around py-3 text-sm border-t border-rose-200 dark:border-purple-900/60 bg-rose-50 dark:bg-[#0d0911] pb-[calc(.75rem+env(safe-area-inset-bottom))] md:border-0 md:inset-x-auto md:right-0 md:top-0 md:bottom-0 md:w-16 md:flex-col md:items-center md:justify-center md:gap-10 md:[writing-mode:vertical-rl]">
  <a href="index.php" class="text-rose-900/60 dark:text-rose-200/60 hover:text-sakura transition">HOME</a>
  <a href="bio.php" class="text-rose-900/60 dark:text-rose-200/60 hover:text-sakura transition">BIO</a>
  <a href="assignment.php" class="text-sakura dark:text-sakura-light font-semibold before:content-['◆_']">ASSIGNMENT</a>
</nav>

<main class="relative z-[2] animate-fadein px-5 md:px-10 md:pr-24 pb-28 md:pb-10">
<!-- ===== หน้า ASSIGNMENT ===== -->
<div class="flex items-end gap-4 mb-8">
  <p class="text-8xl md:text-9xl font-extrabold leading-none [-webkit-text-stroke:1.5px_currentColor] [-webkit-text-fill-color:transparent] text-sakura dark:text-sakura-light">03</p>
  <h2 class="text-2xl md:text-4xl font-semibold pb-2">Assignment <span class="font-jp text-sakura dark:text-sakura-light text-lg">課題</span></h2>
</div>

<div class="border-t border-rose-200 dark:border-purple-900/60">
  <!-- <details> = กล่องกดขยายได้ในตัว HTML / group-open:rotate-45 = หมุน + เป็น × ตอนเปิด
       ก๊อปทั้งบล็อก <details>...</details> เพื่อเพิ่มงานใหม่ แล้วแก้ชื่อ/ลิงก์ -->
  <details class="group border-b border-rose-200 dark:border-purple-900/60 px-3 open:bg-sakura-pale dark:open:bg-[#1d1127]">
    <summary class="flex items-center gap-4 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
      <span class="font-jp text-3xl font-black w-14 [-webkit-text-stroke:1.5px_currentColor] [-webkit-text-fill-color:transparent] text-sakura dark:text-sakura-light">01</span>
      <span class="flex-1 text-lg font-semibold">[ชื่องานที่ 1]</span>
      <span class="text-xs text-sakura dark:text-sakura-light hidden sm:block">เสร็จแล้ว</span>
      <span class="text-2xl text-sakura dark:text-sakura-light transition-transform group-open:rotate-45">+</span>
    </summary>
    <div class="pb-5 pl-[4.5rem] text-rose-900/60 dark:text-rose-200/60">วิชา [ชื่อวิชา] · อธิบายงานสั้น ๆ <a href="#" class="text-sakura dark:text-sakura-light font-semibold ml-2">เปิดงาน →</a></div>
  </details>

  <details class="group border-b border-rose-200 dark:border-purple-900/60 px-3 open:bg-sakura-pale dark:open:bg-[#1d1127]">
    <summary class="flex items-center gap-4 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
      <span class="font-jp text-3xl font-black w-14 [-webkit-text-stroke:1.5px_currentColor] [-webkit-text-fill-color:transparent] text-sakura dark:text-sakura-light">02</span>
      <span class="flex-1 text-lg font-semibold">[ชื่องานที่ 2]</span>
      <span class="text-xs text-sakura dark:text-sakura-light hidden sm:block">เสร็จแล้ว</span>
      <span class="text-2xl text-sakura dark:text-sakura-light transition-transform group-open:rotate-45">+</span>
    </summary>
    <div class="pb-5 pl-[4.5rem] text-rose-900/60 dark:text-rose-200/60">วิชา [ชื่อวิชา] · อธิบายงานสั้น ๆ <a href="#" class="text-sakura dark:text-sakura-light font-semibold ml-2">เปิดงาน →</a></div>
  </details>

  <details class="group border-b border-rose-200 dark:border-purple-900/60 px-3 open:bg-sakura-pale dark:open:bg-[#1d1127]">
    <summary class="flex items-center gap-4 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
      <span class="font-jp text-3xl font-black w-14 [-webkit-text-stroke:1.5px_currentColor] [-webkit-text-fill-color:transparent] text-sakura dark:text-sakura-light">03</span>
      <span class="flex-1 text-lg font-semibold">[ชื่องานที่ 3]</span>
      <span class="text-xs text-rose-900/60 dark:text-rose-200/60 hidden sm:block">กำลังทำ</span>
      <span class="text-2xl text-sakura dark:text-sakura-light transition-transform group-open:rotate-45">+</span>
    </summary>
    <div class="pb-5 pl-[4.5rem] text-rose-900/60 dark:text-rose-200/60">วิชา [ชื่อวิชา] · กำหนดส่ง [วันที่] <a href="#" class="text-sakura dark:text-sakura-light font-semibold ml-2">เปิดงาน →</a></div>
  </details>
</div>

</main>

<script>
// สร้างใบมีด 10 เส้น
for(let i=0;i<10;i++){
  const b=document.createElement('span');
  b.className='fixed -top-[200px] w-0.5 h-[140px] bg-linear-to-b from-transparent to-sakura opacity-60 pointer-events-none z-[1] animate-slash';
  b.style.left=(30+Math.random()*80)+'vw';
  b.style.animationDuration=(5+Math.random()*6)+'s';
  b.style.animationDelay=(-Math.random()*10)+'s';
  document.body.appendChild(b);
}
// สร้างกลีบซากุระ 14 กลีบ
for(let i=0;i<14;i++){
  const p=document.createElement('span');
  p.className='fixed -top-8 w-[11px] h-[15px] bg-linear-to-br from-pink-200 to-sakura-light rounded-[80%_0_80%_0] opacity-70 pointer-events-none z-[1] animate-fall';
  p.style.left=Math.random()*100+'vw';
  p.style.setProperty('--dx',(Math.random()*160-60)+'px');
  p.style.animationDuration=(8+Math.random()*10)+'s';
  p.style.animationDelay=(-Math.random()*14)+'s';
  document.body.appendChild(p);
}
// ปุ่มสลับธีม สว่าง/มืด (จำค่าไว้ข้ามหน้า)
const btn=document.getElementById('theme'),root=document.documentElement;
const sync=()=>btn.textContent=root.classList.contains('dark')?'☀️':'🌙';
btn.onclick=()=>{
  root.classList.toggle('dark');
  try{localStorage.setItem('theme',root.classList.contains('dark')?'dark':'light')}catch(e){}
  sync();
};
sync();
</script>
</body>
</html>
