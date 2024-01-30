@extends('layouts.home')

@section('content')

    <div class="flex gap-10 w-full mt-14">
        <div class="w-4/6">
            <div class="w-5/6 mx-auto">
                <img src="https://source.unsplash.com/random" alt="" class="object-cover w-full rounded">
            </div>

            <div class="mt-5">
                <h1 class="text-xl font-bold capitalize">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse, deleniti.</h1>
                <p class="text-xs font-light text-gray-400">2 hari yang lalu</p>

                <div class="mt-5 font-light text-gray-700 text-justify">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis provident maxime vero rem sint deleniti asperiores temporibus natus, ratione nemo suscipit velit quod molestias recusandae eius, veniam a molestiae deserunt quidem cupiditate commodi veritatis. Debitis minima dolorum porro quidem obcaecati, autem possimus officiis, sapiente aspernatur alias ipsa ab vel eius fugit omnis architecto nisi blanditiis. Maiores voluptates quod assumenda commodi quam, modi rerum esse blanditiis quae amet, qui expedita itaque nobis tempore voluptatum reiciendis cumque incidunt doloribus nulla omnis neque sint? Vero minima, nostrum modi, ullam in perspiciatis optio labore odio temporibus inventore exercitationem iste ipsam, quia cum quod aut.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque necessitatibus ratione laborum enim voluptas, suscipit eveniet, quo odit, asperiores minus veniam quaerat quam accusantium quibusdam voluptatibus? Error maxime cupiditate eveniet sint voluptatibus corporis rerum repudiandae odio nulla totam, ea quas atque non eligendi consectetur pariatur sunt. Earum repellendus tempore, voluptatum quod corporis explicabo ad quasi libero suscipit eum quidem ullam sed ex totam doloribus dolor corrupti blanditiis. Repellendus veniam voluptates assumenda nemo unde. Aut pariatur maxime eligendi, distinctio quisquam voluptatibus aliquid eaque atque asperiores perferendis nostrum iure architecto necessitatibus doloremque voluptates eius veniam illum consectetur ea. Dicta quibusdam quas ratione, nostrum dolores itaque cumque nisi consequatur perferendis deleniti mollitia et distinctio beatae aliquam magnam! Ut excepturi architecto quia provident esse vitae deleniti id modi sunt eos nostrum maxime iste repellat quod fugit voluptatum, consequatur laborum numquam. Hic, quod, iste praesentium ullam deleniti eligendi temporibus suscipit repellendus totam sit perferendis numquam.</p>
                </div>
            </div>
        </div>

        <div class="w-2/6">
            <h1 class="text-2xl font-semibold">Berita Terbaru</h1>

            <div class="mt-5 flex flex-col gap-5">
                <div class="w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-extralignt text-xs text-gray-500 dark:text-gray-400">2 hari yang lalu</p>
                    </div>
                </div>
                <div class="w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-extralignt text-xs text-gray-500 dark:text-gray-400">2 hari yang lalu</p>
                    </div>
                </div>
                <div class="w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-extralignt text-xs text-gray-500 dark:text-gray-400">2 hari yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
