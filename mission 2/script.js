document.addEventListener("DOMContentLoaded", function () {
    const leftSide = document.querySelector(".left-side");
    const rightSide = document.querySelector(".right-side");
  
    function updateMemberCount() {
      const jumlahMember = leftSide.querySelectorAll(".akun").length;
      const jumlahMember2 = rightSide.querySelectorAll(".akun").length;
  
      document.querySelector("#jumlahMember").textContent = ` (${jumlahMember}) `;
      document.querySelector("#jumlahMember2").textContent = ` (${jumlahMember2}) `;
    }
  
    function moveAkun(akun, fromList, toList, isFollowButton) {
      const akunCopy = akun.cloneNode(true);
      const followButton = akunCopy.querySelector(".followbutton");
      const unfollowButton = akunCopy.querySelector(".unfollowbutton");
  
      if (isFollowButton) {
        followButton.removeEventListener("click", followHandler);
        followButton.addEventListener("click", unfollowHandler);
        followButton.classList.remove("followbutton");
        followButton.classList.add("unfollowbutton");
        followButton.textContent = "Unfollow";
      } else {
        unfollowButton.removeEventListener("click", unfollowHandler);
        unfollowButton.addEventListener("click", followHandler);
        unfollowButton.classList.remove("unfollowbutton");
        unfollowButton.classList.add("followbutton");
        unfollowButton.textContent = "Follow";
      }
  
      fromList.querySelector(".isi").removeChild(akun);
      toList.querySelector(".isi2").appendChild(akunCopy);
      updateMemberCount();
    }
  
    function followHandler() {
      moveAkun(this.parentElement, leftSide, rightSide, true);
    }
  
    function unfollowHandler() {
      moveAkun(this.parentElement, rightSide, leftSide, false);
    }
  
    const followButtons = leftSide.querySelectorAll(".followbutton");
    const unfollowButtons = rightSide.querySelectorAll(".unfollowbutton");
  
    followButtons.forEach((button) => {
      button.addEventListener("click", followHandler);
    });
  
    unfollowButtons.forEach((button) => {
      button.addEventListener("click", unfollowHandler);
    });
  
    updateMemberCount();
  });


  

