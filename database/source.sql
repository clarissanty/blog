SELECT post.id_post, post.title_post, category.name_category

FROM tbl_category AS category LEFT JOIN tbl_post AS post ON category.id_category = post.id_category
WHERE category.id_category;

SELECT * FROM tbl_post AS post ORDER BY post.id_post ASC;tbl_post