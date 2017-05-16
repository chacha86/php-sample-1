<?php
$sql = "
UPDATE article
SET title = '{$safeSqlArgs['title']}',
body = '{$safeSqlArgs['body']}'
WHERE id = '{$safeSqlArgs['id']}'
";
execute($sql);

jsAlert("{$actArgs['id']}번 게시물이 수정되었습니다.");
jsMove("/?act=article__detail&id={$actArgs['id']}&boardId={$actArgs['boardId']}");
