<?php
function getAllPieceInfo() {
  $sql = 'SELECT piece_code, piece_price, piece_data FROM pieces';
  $pieces = Db::query($sql);
  $pieces = array_column($pieces, null, 'piece_code');
  $pieceExtraStocks = ['a' => 10, 'aa' => 14, 'ab' => 99, 'b' => 12, 'ba' => 45];

  foreach ($pieceExtraStocks as $pieceStockCode => $extraStock) {
    $pieces[$pieceStockCode]['stock'] = $extraStock;
  }

  return $pieces;
}
?>
