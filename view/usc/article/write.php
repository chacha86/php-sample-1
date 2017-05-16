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
<form action="/?act=article__doWrite" method="POST" onsubmit="submitForm(this); return false;">
	<input type="hidden" name="boardId" value="<?=$actArgs['boardId']?>">
	<input type="text" name="title" placeholder="제목을 입력해주세요." />
	<br>
	<textarea name="body" placeholder="내용을 입력해주세요."></textarea>
	<br>
	<input type="submit" value="작성" />
</form>
