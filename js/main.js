


const element = document.querySelectorAll(".js-choice").forEach(element => {
  const choices = new Choices(element, {
      searchEnabled: false,
      itemSelectText: ""
    })
})