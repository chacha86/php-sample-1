<?php
$sql = "
SELECT *
FROM article
WHERE id = {$safeSqlArgs['id']}
";
$article = getRow($sql);
?>
<script>
var formSubmited = false;
function submitForm(form) {
	if ( formSubmited ) {
		alert('이미 요청되었습니다. 잠시만 기다려주세요.');
		return false;
	}

	form.title.value = form.title.value.trim();
	if ( form.title.value == '' ) {
		alert('제목을 입력해주세요.');
		form.title.focus();

		return false;
	}

	if ( form.body.value == '' ) {
		alert('내용을 입력해주세요.');
		form.body.focus();

		return false;
	}

	var $submitBtn = $(form).find('input[type=submit]');

	$submitBtn.val('잠시만 기다려주세요...');
	$submitBtn.prop('disabled', true);

	formSubmited = true;
	form.submit();
}
</script>
<form method="POST" action="/?act=article__doModify" onsubmit="submitForm(this); return false;">
<input type="hidden" name="id" value="<?=$actArgs['id']?>">
<input type="hidden" name="boardId" value="<?=$actArgs['boardId']?>">
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
				<input type="text" name="title" placeholder="제목을 입력해주세요." value="<?=$article['title']?>" />
			</td>
		</tr>
		<tr>
			<th>
				내용
			</th>
			<td>
				<textarea name="body" placeholder="내용을 입력해주세요."><?=$article['body']?></textarea>
			</td>
		</tr>
		<tr>
			<th>
				처리
			</th>
			<td>
				<input type="submit" value="수정" />
			</td>
		</tr>
	</tbody>
</table>
</form>

<a href="/?act=article__list&boardId=<?=$actArgs['boardId']?>">리스트로 이동</a>
<a href="/?act=article__modify&id=<?=$actArgs['id']?>&boardId=<?=$actArgs['boardId']?>">수정</a>
<a onclick="if ( confirm('정말로 삭제하시겠습니까?') == false ) return false;" href="/?act=article__doDelete&id=<?=$actArgs['id']?>&boardId=<?=$actArgs['boardId']?>">삭제</a>
