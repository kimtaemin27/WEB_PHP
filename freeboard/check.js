/**
*  빈칸 체크
*/
 function check_input() {
  // 이름 체크
  if(!document.board.name.value) {
    alert("이름을 입력하세요");
    document.board.name.focus();
    return;
  }
  
  // 비밀번호 체크
  if(!document.board.pass.value) {
    alert("비밀번호를 입력하세요");
    document.board.pass.focus();
    return;
  }

  // 제목 체크
  if(!document .board.subject.value) {
    alert("제목을 입력하세요");
    document.board.subject.focus();
    return;
  }

  // 내용 체크
  if(!document.board.content.value) {
    alert("내용을 입력하세요");
    document.board.content.focus();
    return;
  }

  document.board.submit();
}