function check_password(mode, num) {
  // mode : modify(수정) delete(삭제) num 레코드 번호
  window.open("password_form.php?mode="+mode+"&num"+num,"pass_check", "left=700, top=300, width=500, height=150, scrollbars=no, resizable=yes");
}