<?php
$sql = "
INSERT INTO article
SET title = '{$safeSqlArgs['title']}',
body = '{$safeSqlArgs['body']}',
writer = '관리자',
userId = 1,
boardId = '{$safeSqlArgs['boardId']}',
regDate = NOW(),
updateDate = NOW()
";
execute($sql);
$newArticleId = getLastId();

jsAlert("{$newArticleId}번 게시물이 생성되었습니다.");
jsMove("/?act=article__list&boardId={$actArgs['boardId']}");
