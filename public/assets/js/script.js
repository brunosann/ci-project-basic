const btns = document.querySelectorAll(".modal-edit");

const handleClickModalEdit = ({ target }) => {
  const postId = target.dataset.key;
  const post = target.parentElement.querySelector("p").innerText;
  const postTextarea = document.querySelector("#post");
  postTextarea.value = post;
  const inputHiddenPost = document.querySelector("#post-id");
  inputHiddenPost.value = postId;
};

btns.forEach((btn) => btn.addEventListener("click", handleClickModalEdit));
