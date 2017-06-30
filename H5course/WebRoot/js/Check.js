/**
 * Created by Lover on 2016/6/19.
 */
function check(){
    var text=document.getElementById("username").value;
    var pwd=document.getElementById("password").value;//获取密码
    var confirmpwd=document.getElementById("checkpassword").value;//获取确认密码
    var email=document.getElementById("email").value;//获取邮件
    var tel=document.getElementById("telephone").value;//获取手机号码
    //如果验证成功，就弹出对话框
    var sReg = /[_a-zA-Z\d\-\.]+@[_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+$/;
    //邮箱的正则表达式
    var tReg=/^(13[0-9]{9})|(15[89][0-9]{8})$/;//手机格式正则表达式
    if(text.length!=0){
        if(pwd.length!=0){
            if(confirmpwd==pwd){
                if(email.length!=0){
                    if(sReg.test(email)){
                        if(tel.length!=0){
                            if(tReg.test(tel)){
                                if(postReg.test(post)){
                                    alert("注册成功!!");
                                    return true;
                                }

                            }
                            else{
                                alert("您输入的手机号码格式不正确，请核对后再输入！");
                                tel.focus();
                                return false;
                            }
                        }
                        else{
                            alert("手机号码不能为空！！");
                            tel.focus();
                            return false;
                        }
                    }
                    else{
                        alert("Email地址错误！请重新输入。");
                        email.focus();
                        return false;
                    }
                }
                else{
                    alert("邮箱不能为空！！");
                    email.focus();
                    return false;
                }
            }
            else {
                alert("两次输入的密码不一致！");
                confirmpwd.focus();
                return false;
            }
        }
        else{
            alert("密码不能为空！！");
            pwd.focus();
            return false;
        }
    }
    else{
        alert("姓名不能为空！");
        user.focus();
        return false;
    }
}
