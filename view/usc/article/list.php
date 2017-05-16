<?
$sql = "
SELECT *
FROM article
ORDER BY id DESC
LIMIT 100
";
$articles = getRows($sql);
?>

<table>
	<thead>
		<tr>
			<th>
				번호
			</th>
			<th>
				제목
			</th>
		</tr>
	</thead>
	<tbody>
		<? foreach ( $articles as $article ) { ?>
			<?
			$link = "/?act=article__detail&id={$article['id']}&boardId={$actArgs['boardId']}";
			?>
			<tr>
				<td>
					<a href="<?=$link?>"><?=$article['id']?></a>
				</td>
				<td>
					<a href="<?=$link?>"><?=$article['title']?></a>
				</td>
			</tr>
		<? } ?>
	</tbody>
</table>

<a href="/?act=article__write&boardId=<?=$actArgs['boardId']?>">게시물 작성</a>
