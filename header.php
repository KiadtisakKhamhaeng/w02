<?php
$pageTitle = $pageTitle ?? "เว็บไซต์ของฉัน";
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

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

<body class="font-th min-h-screen overflow-x-hidden bg-rose-50 text-[#2a1020] dark:bg-[#0d0911] dark:text-rose-50 pt-[env(safe-area-inset-top)] pb-[env(safe-area-inset-bottom)] transition-colors">

<main class="relative z-[2] animate-fadein px-5 md:px-10 md:pr-24 pb-28 md:pb-10">

</head>
<body>
