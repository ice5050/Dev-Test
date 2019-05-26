WITH latest_comments AS (
  SELECT c.*, ROW_NUMBER() OVER (PARTITION BY post_id ORDER BY created_datetime DESC) AS rn
  FROM comments AS c
)
SELECT p.content `Post`, lc.content `Most recent comment`
FROM posts p
LEFT JOIN latest_comments lc
ON p.post_id = lc.post_id
WHERE lc.rn = 1 OR lc.rn IS NULL;
