import data from "./database";

function renderCards() {
    data.forEach((element) => {
        createCard(element);
    });
}

const listUl = document.querySelector("#listaPrincipal");

function createCard({ id, img, tag, nameItem, description, value }) {
    
    listUl.insertAdjacentHTML(
        "beforeend",
        `
        <li class="card" id="${id}">
        <img src="${img}" alt="${nameItem}">
        <p class="type">${tag[0]}</p>
        <h3>${nameItem}</h3>
        <p class="descricao">${description}</p>
        <p class="preco">${value},00</p>
        <button class="botao" id="b_${id}">Adicionar ao Carrinho</button>
        </li>
        `
        );
    }

    renderCards()
    
function filtraProdutos(){
    const buttons = document.querySelectorAll("[data-btn]")
    
    buttons.forEach((element)=>{
        element.addEventListener("click", (e)=>{
            const value = e.target.dataset.btn
            if(value !=""){
                listUl.innerHTML=""
                const newArray = data
                .filter(({tag})=>{
                    return tag[0] === value
                })
                forEach((element)=>createCard(element))
                return newArray
                
            }else{
                listUl.innerHTML=""
                renderCards()
            }
        })
    })
}


function pesquisarProdutos(){
    const search = document.querySelector("#searchButton")
    const input = document.querySelector("#input")
    
    search.addEventListener("click",(e)=>{
        e.preventDefault()
        listUl.innerHTML=""
        const produto = input.value.toLowerCase()
        const newArray = data.filter((element)=>
        element.nameItem.toLowerCase().includes(produto)||
        element.description.toLowerCase().includes(produto)
        )
        
        newArray.forEach(element=>createCard(element))
        return newArray;
    })
}



input.addEventListener('chenge',(ev)=>{
    ev.preventDefault()
    listUl.innerHTML= ""
    const produto = input.value
    const newArray = data.filter((element)=> element.nameItem.includes(produto) || element.description.includes(produto))
    newArray.forEach(element=>createCard())
})

pesquisarProdutos()
filtraProdutos()

// processo de adicionar items ao carrinho 


const listaSelecionados =document.querySelectorAll("listaCompras")
const botoesAdd =document.querySelectorAll(".botao")

let selecionados = []
let itensNalista = []

function loadList() {
    if(quantia<=0){
        listaSelecionados.innerHTML=""
        carroVazio()
    }    
    else{
        listaSelecionados.innerHTML=""
        
    }
    for (let l=0; l<listaSelecionados.length;l++) {
        let currentElement = selecionados[l]
        currentElement.id = l 
        listaSelecionados.appendChild(currentElement)
    }
}

function removeButton(){
    listaSelecionados=""
    const removerButton = document.createElement("button")
    removerButton.addEventListener("click",(ev)=>{
        let itemId= selecionados.filter(( _ , index)=>{
            
          
        })
    })
}