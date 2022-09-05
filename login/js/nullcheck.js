function check_input() {

  if (!document.member.id.value) {
      alert("아이디를 입력하세요!");    
      document.member.id.focus();
      return;
  }

  if (!document.member.pass.value) {
      alert("비밀번호를 입력하세요!");    
      document.member.pass.focus();
      return;
  }

  if (!document.member.pass_confirm.value) {
      alert("비밀번호확인을 입력하세요!");    
      document.member.pass_confirm.focus();
      return;
  }

  if (!document.member.name.value) {
      alert("이름을 입력하세요!");    
      document.member.name.focus();
      return;
  }

  if (!document.member.email.value) {
      alert("이메일 주소를 입력하세요!");    
      document.member.email.focus();
      return;
  }

  if (document.member.pass.value != document.member.pass_confirm.value) {
      alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
      document.member.pass.focus();
      document.member.pass.select();
      return;
  }

  document.member.submit();
  
}

function reset_form() {
  document.member.id.value = "";  
  document.member.pass.value = "";
  document.member.pass_confirm.value = "";
  document.member.name.value = "";
  document.member.email.value = "";
  document.member.id.focus();
  return;
}

function check_id() {
 window.open("check_id.php?id=" + document.member.id.value,
     "IDcheck",
      "left=700,top=300,width=380,height=160,scrollbars=no,resizable=yes");
}