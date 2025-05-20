<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Front End Shafa</title>
  <link rel="icon" type="image/x-icon" href="assets/img/Beige Queen Beauty Elegant Logo (2).png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'IBM Plex Sans', sans-serif;
      margin: 0;
      height: 100vh;
      overflow: hidden;
      background-color: #ffffff; /* putih bersih */
    }
    .colored-shadow {
      box-shadow:
        0 10px 15px rgba(217, 143, 247, 0.4),
        0 20px 25px rgba(171, 81, 190, 0.3),
        0 30px 40px rgba(189, 104, 221, 0.2);
      border-radius: 1rem; /* sama dengan rounded-tl-4xl rounded-bl-4xl */
      transition: transform 0.5s ease;
    }
    .colored-shadow:hover {
      transform: scale(1.05);
      box-shadow:
        0 15px 25px rgba(217, 143, 247, 0.6),
        0 30px 40px rgba(171, 81, 190, 0.5),
        0 40px 60px rgba(189, 104, 221, 0.4);
    }
  </style>
 </head>
 <body>
  <div
    class="max-w-full h-full mx-auto rounded-lg overflow-hidden flex flex-col md:flex-row shadow-lg"
    style="height: 100vh; background: linear-gradient(90deg, #f8e6f7 0%, #ffe4f1 100%)"
  >
   <!-- Left content -->
   <div class="flex flex-col justify-center p-12 md:w-1/2 text-[#5c3d6d]">
    <div class="flex items-center mb-10 space-x-3">
     <div
       class="text-[#c47ed8] text-3xl font-extrabold leading-none"
       style="font-family: 'Times New Roman', serif;"
     >
      ||
     </div>
     <div
       class="text-[#a86bbf] text-lg font-semibold tracking-widest uppercase"
     >
      Tugas Front End Pemrograman Web
     </div>
    </div>
    <h1
      class="font-serif font-extrabold text-6xl md:text-7xl leading-tight mb-8"
      style="font-family: 'Times New Roman', serif; color: #4a2c69;"
    >
     Tsanita Shafa Hadinanda
    </h1>
    <p class="text-[#7a599c] text-lg max-w-lg mb-10">
     Berikut adalah kumpulan tugas tugas dan file mata kuliah Pemrograman Web Semester 4 tahun 2025 Sistem Informasi ITS
    </p>
    <a
      href="linkfe"
      class="bg-[#d98ff7] hover:bg-[#b66cec] text-white font-bold text-sm uppercase px-8 py-3 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105"
      >Kumpulan Tugas Frontend</a
    >
   </div>

   <!-- Right image -->
   <div
     class="md:w-1/2 relative flex justify-center items-center p-8 md:p-20"
     style="height: 100%;"
   >
    <div
      class="absolute top-0 right-0 w-16 h-16 md:w-28 md:h-28 rounded-tl-4xl rounded-bl-4xl bg-[#d98ff7] opacity-70 animate-pulse"
      style="z-index: 10"
    ></div>
    <img
        alt="Computer screen with online strategy and mobile devices on white desk with blue flowers on shelf"
        class="relative object-cover max-w-full h-full colored-shadow"
        src="https://storage.googleapis.com/a1aa/image/1ba52204-4f7f-401d-3e0f-455144016e29.jpg"
        style="z-index: 20; border-radius: 1.5rem;"
    />

   </div>
  </div>
 </body>
</html>
