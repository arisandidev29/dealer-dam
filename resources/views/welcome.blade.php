<x-app-layout>
<x-nav />
<main >
    <section id="hero" style="background-image: url('{{ asset("storage/bg.svg") }}');" class="bg-cover bg-center min-h-screen md:min-h-[110vh] pt-14 md:pt-20 grid grid-cols-1 md:grid-cols-2 grid-rows-mobile-hero grid-flow-dense gap-0">
        <div class="md:pt-10 px-10 text-center md:text-left order-last md:order-first ">


            <h1 class="font-title text-4xl md:text-8xl text-white font-semibold">Daya Motor</h1>

            <h2 class="font-title text-2xl md:text-6xl text-accent">Dealer</h2>

            <p class="text-xs md:text-base text-white md:w-80 my-4  md:my-6">"menjadi Solusi Terpercaya untuk kebutuhan Sepeda Motor Honda Anda" </p>
            <button class="btn">Contact us</button>

        </div>
        
        <div>
            <img src="{{ asset("storage/hero img.png") }}" alt="hero img" class=" w-[70%] mx-auto md:w-full order-first md:order-last">
        </div>
        
    </section>

    <section id="about" class="px-10 my-20">
       <h2 class="subtitle">Siapa Kami ? </h2>         
       <p class="pt-4 text-base md:text-lg leading-10">
           Daya Motor (DAM) adalah dealer motor honda yang didirikan pada tahun 2018, yang merupakan dealer motor honda cabang Tidore yang berpusat di Ternante, Dealer motor DAM berlokasi di <strong>Jl. Kemakmuran, Indonesianan, Kota Tidore Kepulauan, Maluku Utara</strong>, bertujuan Untuk memberikan akases motor idaman untuk masyarakat <strong>Tidore</strong> 
       </p>
    </section>


    <section id="visimisi" class=" px-4 md:px-10 my-20 -z-10">
       <div class="bg-primary rounded-2xl px-10 py-12 md:grid grid-cols-2 relative ">
            <img src="{{ asset("storage/Oval 4.svg") }}" alt="oval" class="absolute -top-10 md:-top-16 right-8 w-16 md:w-32">
            <img src="{{ asset("storage/Oval 4.svg") }}" alt="oval" class="absolute -bottom-10 md:-bottom-16 left-8 w-16 md:w-32">
           <div class="self-center">
               <img src="{{ asset("storage/visi img.png") }}" alt="visi misi image" class="w-[50%] mx-auto">
           </div>
           <div>
               <h3 class="text-4xl md:text-6xl text-white text-center md:text-left my-4">Visi</h3>
               <p class="text-white text-base  md:text-lg text-center md:text-left "> " Menjadi perusahan yang handal dan terpercaya dalam memenuhi kebutuhan dan harapan konsumen untuk memiliki sepeda motor honda dan layan purnajual "</p> 

               <h3 class="text-4xl md:text-6xl text-white text-center md:text-left my-4"> Misi </h3>
                <ul class=" flex flex-col gap-2 list-outside  list-disc text-white text-base md:text-lg">
                     <li>Memberikan layanan terbaik sehingga dapat memberikan pengalaman yang berkesan bagi pelanggan</li>
                     <li>Membangun tim serta jaringan yang kompeten dan bersemagat</li>
                     <li>Membangun budaya improvement</li>
                     <li>Memperkuat teknologi informasi untuk menopang operasion yang handal</li>
                     <li>Membangun kepercayaan antara stakeholder</li>
                 </ul> 
           </div>
       </div> 
    </section>

    <section id="chose" class="px-10 my-20 md:my-36 block">
        <h1 class="subtitle text-center my-4">Kenapa Memilih Kami </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-primary p-4 rounded-lg ">
           <div class="w-14 p-2 bg-primary-light rounded-lg ">
               <img src="{{ asset("storage/Safe .png") }}" alt="brankas">
           </div> 
           <p class="text-white text-xs mt-4">Semua produk bersumber dari penyedia yang terbukti aman dan sesuai standart</p>
        </div>
            
         <div class="bg-primary p-4 rounded-lg ">
           <div class="w-14 p-2 bg-primary-light rounded-lg ">
               <img src="{{ asset("storage/Key.png") }}" alt="brankas">
           </div> 
           <p class="text-white text-xs mt-4">Semua produk bersumber dari penyedia yang terbukti aman dan sesuai standart</p>
        </div>
            
         <div class="bg-primary p-4 rounded-lg ">
           <div class="w-14 p-2 bg-primary-light rounded-lg ">
               <img src="{{ asset("storage/Collaboration.png") }}" alt="brankas">
           </div> 
           <p class="text-white text-xs mt-4">Semua produk bersumber dari penyedia yang terbukti aman dan sesuai standart</p>
        </div>
            
            
        </div>
    </section>

    <section id="contact" class="my-8 px-5 mt-10">
        <h2 class="subtitle text-center my-4">Contact Us</h2>
        <x-form>
            <div class="flex flex-col gap-4  md:gap-6">
            <x-input type="text" label="Nama" name="nama" />
            <x-input type="email" label="Email" name="email" />

            <label for="pesan">
                <p class="text-white text-sm md:text-base">Pesan</p>
                <textarea name="pesan" id="pesan" class="bg-primary-light w-full  px-4 py-2 rounded-md text-white text-sm border-none outline-none h-52 text-sm md:text-base"></textarea>
            </label>
            </div>

            <button class="btn mt-6">Kirim</button>
        </x-form>

        <h3 class="subtitle text-center italic font-normal  my-4 md:text-base">Social media</h3>
        <ul class=" flex gap-4 justify-center">
            <li class="w-8 md:w-16"><a href="">
                <img src="{{ asset("storage/Whatsap.png") }}" alt="whatsap">
            </a></li>
            <li class="w-8 md:w-16"><a href="">
                <img src="{{ asset("storage/Facebook@2x.png") }}" alt="facebook">
            </a></li>
            <li class="w-8 md:w-16"><a href="">
                <img src="{{ asset("storage/Instagram.png") }}" alt="instagram">
            </a></li>
            <li class="w-8 md:w-16"><a href="">
                <img src="{{ asset("storage/Tiktok.png") }}" alt="tiktok">
            </a></li>
        </ul>
    </section>
</main>

<x-footer />
</x-app-layout>