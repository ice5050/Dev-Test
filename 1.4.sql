SELECT o.order_id, o.customer_id, COUNT(*) AS `amt_price_gt_22_line`
FROM orders o
JOIN order_lines ol
USING(order_id)
WHERE ol.price > 22
GROUP BY o.order_id
HAVING amt_price_gt_22_line >= 3;
