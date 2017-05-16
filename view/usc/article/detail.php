<?php
$sql = "
SELECT *
FROM article
WHERE id = {$safeSqlArgs['id']}
";
$article = getRow($sql);
?>

<table>
	<tbody>
		<tr>
			<th>
				번호
			</th>
			<td>
				<?=$article['id']?>
			</td>
		</tr>
		<tr>
			<th>
				작성날짜
			</th>
			<td>
				<?=$article['regDate']?>
			</td>
		</tr>
		<tr>
			<th>
				수정날짜
			</th>
			<td>
				<?=$article['updateDate']?>
			</td>
		</tr>
		<tr>
			<th>
				작성자
			</th>
			<td>
				<?=$article['writer']?>
			</td>
		</tr>
		<tr>
			<th>
				제목
			</th>
			<td>
				<?=$article['title']?>
			</td>
		</tr>
		<tr>
			<th>
				내용
			</th>
			<td>
				<?=$article['body']?>
			</td>
		</tr>
	</tbody>
</table>

<a href="/?act=article__list&boardId=<?=$actArgs['boardId']?>">리스트로 이동</a>
<a href="/?act=article__modify&id=<?=$actArgs['id']?>&boardId=<?=$actArgs['boardId']?>">수정</a>
<a onclick="if ( confirm('정말로 삭제하시겠습니까?') == false ) return false;" href="/?act=article__doDelete&id=<?=$actArgs['id']?>&boardId=<?=$actArgs['boardId']?>">삭제</a>
