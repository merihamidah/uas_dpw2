<p > 
  Rp.{{ $produk->harga}} |
  Stock : {{ $produk->stok }} |
  Berat : {{ $produk->berat }} gr |
  Tanggal Produk : {{ $produk->created_at->diffForHumans() }}
</p>