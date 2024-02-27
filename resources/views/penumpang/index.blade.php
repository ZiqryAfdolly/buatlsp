<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="p-10">

  

  <ul class="border-2 border-black border-solid mb-2">
    @foreach($data_kota as $index => $kota)
      <li>{{ $kota->nama_kota }}</li>
    @endforeach
  </ul>
  <ul class="border-2 border-black border-solid">
    @foreach($data_order_detail as $index => $data_order)
      <li>{{ $data_order->user->first()->nama_lengkap }}</li>
      <li>{{ $data_order->penerbangan->rute->maskapai->nama_maskapai }}</li>
      <li>{{ $data_order->penerbangan->rute->rute_asal }}</li>
      <li>{{ $data_order->penerbangan->rute->rute_tujuan }}</li>
      <li>{{ $data_order->orderTiket->first()->struk }}</li>
      <li>{{ $data_order->jumlah_tiket }}</li>
      <li>{{ $data_order->total_harga }}</li>
    @endforeach
  </ul>
</body>
</html>