<?php
$sql = "
DELETE FROM article
WHERE id = {$safeSqlArgs['id']}
";
execute($sql);

jsAlert("{$actArgs['id']}번 게시물이 삭제되었습니다.");
jsMove("/?act=article__list&boardId={$actArgs['boardId']}");
