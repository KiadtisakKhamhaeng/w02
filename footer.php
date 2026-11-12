    <footer class="bg-light text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> MyWebsite. สงวนลิขสิทธิ์.</p>
        </div>
    </footer>
    <script src="https://jsdelivr.net"></script>

 <!-- แผงตัดเฉียง: clip-path เขียนเป็น arbitrary value ในวงเล็บเหลี่ยม -->
  <div class="md:col-span-5 relative min-h-[320px] flex items-center justify-end pr-8 bg-linear-to-br from-sakura via-sakura-deep to-sakura-pale dark:from-sakura-light dark:to-[#1d1127] [clip-path:polygon(22%_0,100%_0,100%_100%,0_100%)] md:rounded-bl-[4rem]">
    <p class="font-jp font-black text-5xl md:text-7xl text-white tracking-widest [writing-mode:vertical-rl] [text-shadow:0_4px_24px_rgba(0,0,0,.25)]">千本桜景厳</p>
    <!-- ตราประทับแดง -->
    <div class="absolute bottom-6 left-[28%] w-14 h-14 flex items-center justify-center font-jp font-black text-xl bg-[#c8102e] text-white -rotate-[8deg] shadow-[0_0_0_3px_#fff1f5,0_0_0_4px_#c8102e] dark:shadow-[0_0_0_3px_#0d0911,0_0_0_4px_#c8102e]">桜</div>
  </div>

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
</div>
</body>
</html>
