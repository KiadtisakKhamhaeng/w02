<!-- แถบบน: โลโก้ + ปุ่มสลับธีม -->
<div class="relative z-[2] flex justify-between items-center px-5 md:px-10 py-5">
  <a href="index.php" class="font-jp font-black text-xl text-sakura dark:text-sakura-light">Home</a>
  <button id="theme" class="text-xl" aria-label="สลับธีม">🌙</button>
</div>

<!-- เมนู: มือถืออยู่แถบล่าง / จอใหญ่ (md:) อยู่แนวตั้งชิดขวา -->
<nav class="fixed z-50 bottom-0 inset-x-0 flex justify-around py-3 text-sm border-t border-rose-200 dark:border-purple-900/60 bg-rose-50 dark:bg-[#0d0911] pb-[calc(.75rem+env(safe-area-inset-bottom))] md:border-0 md:inset-x-auto md:right-0 md:top-0 md:bottom-0 md:w-16 md:flex-col md:items-center md:justify-center md:gap-10 md:[writing-mode:vertical-rl]">
  <a href="index.php" class="text-sakura dark:text-sakura-light font-semibold before:content-['◆_']">HOME</a>
  <a href="bio.php" class="text-rose-900/60 dark:text-rose-200/60 hover:text-sakura transition">BIO</a>
  <a href="assignment.php" class="text-rose-900/60 dark:text-rose-200/60 hover:text-sakura transition">ASSIGNMENT</a>
</nav>

<main class="relative z-[2] animate-fadein px-5 md:px-10 md:pr-24 pb-28 md:pb-10"></main>