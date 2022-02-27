const makeRequest = () => {
    const word = document.querySelector("#main_input > input").value
    if(word === "") return

    document.querySelector("#main_loading").style.visibility = "visible"

    window.location = `${document.location.origin}/generate/${word}`
}

document.querySelector("#main_generate_btn").addEventListener('click', makeRequest)
document.querySelector("#main_input > input").addEventListener('keydown', (event) => {
    if(event.keyCode == 13) makeRequest()
})
