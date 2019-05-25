<?php
function sentNotification(Order $orders, $email) {
  $emptyOrders = $orders->getPendingMonitoredEmailContainEmptyOrderLines();
  foreach ($emptyOrders as $emptyOrder) {
    try {
      $orderLine = new OrderLine($emptyOrder->order_id);
      send_email(
        $email,
        'Empty order found',
        'Order ID ' . $emptyOrder->order_id . ' has no lines!');
      $orderLine->setMonitoredEmailSent();
    } catch (Exception $e) {
      /* Handling errors like null order_id from emptyOrder, sending email fail */
    }
  }
}
?>
