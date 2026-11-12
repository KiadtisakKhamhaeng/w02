<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Bio</title>

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
  <a href="index.php" class="font-jp font-black text-xl text-sakura dark:text-sakura-light">Bio</a>
  <button id="theme" class="text-xl" aria-label="สลับธีม">🌙</button>
</div>

<!-- เมนู: มือถืออยู่แถบล่าง / จอใหญ่ (md:) อยู่แนวตั้งชิดขวา -->
<nav class="fixed z-50 bottom-0 inset-x-0 flex justify-around py-3 text-sm border-t border-rose-200 dark:border-purple-900/60 bg-rose-50 dark:bg-[#0d0911] pb-[calc(.75rem+env(safe-area-inset-bottom))] md:border-0 md:inset-x-auto md:right-0 md:top-0 md:bottom-0 md:w-16 md:flex-col md:items-center md:justify-center md:gap-10 md:[writing-mode:vertical-rl]">
  <a href="index.php" class="text-rose-900/60 dark:text-rose-200/60 hover:text-sakura transition">HOME</a>
  <a href="bio.php" class="text-sakura dark:text-sakura-light font-semibold before:content-['◆_']">BIO</a>
  <a href="assignment.php" class="text-rose-900/60 dark:text-rose-200/60 hover:text-sakura transition">ASSIGNMENT</a>
</nav>

<main class="relative z-[2] animate-fadein px-5 md:px-10 md:pr-24 pb-28 md:pb-10">
<!-- ===== หน้า BIO ===== -->
<div class="grid md:grid-cols-12 gap-10">
  <!-- ซ้าย: md:sticky md:top-6 = ค้างติดจอตอนเลื่อน (เฉพาะจอใหญ่) -->
  <aside class="md:col-span-4 md:sticky md:top-6 self-start">
    <p class="text-8xl md:text-9xl font-extrabold leading-none [-webkit-text-stroke:1.5px_currentColor] [-webkit-text-fill-color:transparent] text-sakura dark:text-sakura-light">02</p>
    <!-- กรอบซุ้มโค้ง; เปลี่ยน 🌸 เป็น <img src="รูป.jpg"> ได้ -->
    <div class="w-68 h80 mt-4 flex items-center justify-center text-6xl rounded-t-full bg-linear-to-b from-sakura to-sakura-pale dark:from-sakura-light dark:to-[#1d1127]"><img src="img/wl01.jpg" alt="รูปของคุณ" class="w-full h-full object-cover"></div>
    <h2 class="text-2xl font-semibold mt-4">[Kiadtisak] [Khamheang]</h2>
    <p class="text-rose-900/60 dark:text-rose-200/60 text-sm">[Nake] · [20] ปี · 📍 [จันทบุรี]<br>✉️ [gotispp01@gmail.com]</p>
  </aside>

  <div class="md:col-span-8 space-y-10">
    <div class="border-t border-rose-200 dark:border-purple-900/60 pt-4 grid md:grid-cols-4 gap-3">
      <h3 class="text-sakura dark:text-sakura-light font-semibold">แนะนำตัว</h3>
      <p class="md:col-span-3 text-rose-900/60 dark:text-rose-200/60">เขียนแนะนำตัว 2–3 ประโยค เช่น งานอดิเรก สิ่งที่ชอบ และสิ่งที่กำลังเรียนรู้อยู่ตอนนี้</p>
    </div>

    <!-- Timeline การศึกษา: จุดสี่เหลี่ยมหมุน 45° (rotate-45) เป็นข้าวหลามตัด -->
    <div class="border-t border-rose-200 dark:border-purple-900/60 pt-4 grid md:grid-cols-4 gap-3">
      <h3 class="text-sakura dark:text-sakura-light font-semibold">การศึกษา</h3>
      <div class="md:col-span-3 flex items-start">
        <div class="flex-1 relative pt-5"><span class="absolute top-0 left-0 w-3 h-3 rotate-45 bg-sakura"></span><div class="absolute top-[5px] left-3 right-0 h-px bg-rose-200 dark:bg-purple-900"></div><b>[มหาวิทยาลัย / ชั้นปี]</b><p class="text-rose-900/60 dark:text-rose-200/60 text-sm">[สาขา] · [ปี] – ปัจจุบัน</p></div>
        <div class="flex-1 relative pt-5"><span class="absolute top-0 left-0 w-3 h-3 rotate-45 bg-sakura-deep"></span><b>[โรงเรียนเดิม]</b><p class="text-rose-900/60 dark:text-rose-200/60 text-sm">จบปี [ปี]</p></div>
      </div>
    </div>

    <!-- แท็กทักษะ: -skew-x-12 เอียงกรอบเหมือนรอยดาบ; ก๊อปบรรทัด span เพื่อเพิ่มทักษะ -->
    <div class="border-t border-rose-200 dark:border-purple-900/60 pt-4 grid md:grid-cols-4 gap-3">
      <h3 class="text-sakura dark:text-sakura-light font-semibold">ทักษะ</h3>
      <div class="md:col-span-3 flex flex-wrap gap-3">
        <span class="px-4 py-1 border border-sakura -skew-x-12">HTML / CSS</span>
        <span class="px-4 py-1 border border-sakura -skew-x-12">Tailwind</span>
        <span class="px-4 py-1 border border-sakura -skew-x-12">JavaScript</span>
        <span class="px-4 py-1 bg-sakura text-white -skew-x-12">[ทักษะอื่น ๆ]</span>
      </div>
    </div>
  </div>
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
