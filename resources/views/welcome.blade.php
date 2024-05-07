<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite('resources/css/app.css')
        <title>Document</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="flex justify-between items-center p-4 bg-blue-500">
            <div class="text-white font-semibold md:text-xl text-lg">
                HARIS-BLOG
            </div>
            <ul
                class="flex flex-row gap-x-2 md:gap-x-4 *:uppercase text-white font-semibold md:text-md text-sm"
            >
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Main Section -->
        <section
            class="md:min-h-screen pb-8 flex justify-center items-center flex-col md:flex-row"
            id="home"
        >
            <img src="/images/coding.jpg" alt="" width="400" />
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold">HARIS BLOG</h1>
                <h1 class="text-3xl font-bold">@HarisOffical</h1>
            </div>
        </section>
        <!-- About Section -->
        <section
            class="flex flex-col md:px-96 px-12 py-16 text-white bg-blue-950"
            id="about"
        >
            <h1 class="md:text-3xl text-xl text-center font-bold">About</h1>
            <p class="pt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                quae deserunt voluptatibus! Dolorem quae est atque aut dolor
                praesentium reprehenderit odit id eum voluptates totam in ad
                obcaecati quo corrupti unde eveniet, eius sint mollitia autem!
                Nam repellat minus natus obcaecati laudantium corporis assumenda
                voluptatum veniam ratione vitae, reiciendis nesciunt!
            </p>
        </section>
        <!-- Gallery Section -->
        <section class="px-8 py-16 w-full" id="gallery">
            <h1 class="md:text-3xl text-xl text-center font-bold">Gallery</h1>
            <div
                class="flex items-center justify-center w-full flex-wrap gap-2 pt-4"
            >
                <img
                    src="/images/andalusia-door.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/ancient.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/assassin2.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/desert-camel.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/istanbul.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/istanbul2.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/kapal_view.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
                <img
                    src="/images/map.jpg"
                    class="object-cover w-[130px] sm:w-[200px] md:w-[400px] h-[130px]"
                />
            </div>
        </section>
        <!-- Contact Section -->
        <section
            class="flex flex-col p-8 text-white items-center bg-blue-950"
            id="contact"
        >
            <h1 class="md:text-3xl text-xl text-center font-bold">Contact</h1>
            <form class="flex flex-col gap-2 pt-2">
                <div class="flex flex-col">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        class="p-2 rounded-lg sm:w-96"
                    />
                </div>
                <div class="flex flex-col">
                    <label for="name">Nama</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Nama"
                        class="p-2 rounded-lg sm:w-96"
                    />
                </div>
                <div class="flex flex-col">
                    <label for="pesan">Pesan</label>
                    <textarea
                        name="pesan"
                        placeholder="Masukkan pesan anda disini"
                        maxlength="200"
                        class="p-2 rounded-lg sm:w-96"
                    ></textarea>
                </div>
                <button
                    type="submit"
                    class="p-2 rounded-lg bg-blue-500 self-start"
                >
                    Kirim Pesan
                </button>
            </form>
        </section>
    </body>
</html>
