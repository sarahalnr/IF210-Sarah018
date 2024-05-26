<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <title>List Produk</title>
</head>

<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3 text-center">
            ID
          </th>
          <th scope="col" class="px-6 py-3 text-center">
            Nama Produk
          </th>
          <th scope="col" class="px-6 py-3 text-center">
            Deskripsi
          </th>
          <th scope="col" class="px-6 py-3 text-center">
            Harga
          </th>
          <th scope="col" class="px-6 py-3 text-center">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($nama as $index => $item)
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
          <td scope="row" class="px-6 py-4">
            {{ $index + 1 }}
          </td>
          <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $item }}
          </td>
          <td class="px-6 py-4">
            {{ $desc[$index] }}
          </td>
          <td class="px-6 py-4">
            {{ $harga[$index] }}
          </td>
          <td>
            <form action="{{ route('produk.delete', $id[$index]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Are you sure you want to delete {{ $item }}?')" class="font-medium text-red-600 dark:text-red-500 hover:underline text-center">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <br>
  <div>
    <h1 class="text-center font-semibold mt-5">Input Produk</h1>
  </div>
  <form class="max-w-xs mx-auto " method="POST" action="{{ route('produk.simpan') }}">
    @csrf
    <form class="max-w-sm mx-auto">
      <div class="mb-5">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
        <input type="text" id="nama"  name="nama"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
      </div>
      <div class="mb-5">
        <label for="Deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Produk</label>
        <textarea id="deskripsi" name="deskripsi"
         class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"></textarea>
      </div>
      <div class="mb-5">
        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
        <input type="number" id="harga" name="harga"
        class=" form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" nama="harga" required />
      </div>
      <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">Simpan</button>
    </form>
    </div>
</body>

</html>