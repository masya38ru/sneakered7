$(document).ready(function () {
    "use strict";
    addButtonCategory.onclick = function (evt) {
        addCategory.classList.add('open');
        addKind.classList.remove('open');
        dropCategory.classList.remove('open');
        updateCategory.classList.remove('open');
        updateKind.classList.remove('open');
        dropKind.classList.remove('open');
        addProduct.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_addCategory.onclick = function (evt) {
        addCategory.classList.remove('open');
    }
    addButtonKind.onclick = function (evt) {
        addKind.classList.add('open');
        addCategory.classList.remove('open');
        dropCategory.classList.remove('open');
        updateCategory.classList.remove('open');
        updateKind.classList.remove('open');
        dropKind.classList.remove('open');
        addProduct.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_addKind.onclick = function (evt) {
        addKind.classList.remove('open');
    }
    dropButtonCategory.onclick = function (evt) {
        dropCategory.classList.add('open');
        addCategory.classList.remove('open');
        addKind.classList.remove('open');
        updateCategory.classList.remove('open');
        updateKind.classList.remove('open');
        dropKind.classList.remove('open');
        addProduct.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_dropCategory.onclick = function (evt) {
        dropCategory.classList.remove('open');
    }
    updateButtonCategory.onclick = function (evt) {
        updateCategory.classList.add('open');
        dropCategory.classList.remove('open');
        addCategory.classList.remove('open');
        addKind.classList.remove('open');
        updateKind.classList.remove('open');
        dropKind.classList.remove('open');
        addProduct.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_updateCategory.onclick = function (evt) {
        updateCategory.classList.remove('open');
    }
    updateButtonKind.onclick = function (evt) {
        updateKind.classList.add('open');
        updateCategory.classList.remove('open');
        dropCategory.classList.remove('open');
        addCategory.classList.remove('open');
        addKind.classList.remove('open');
        dropKind.classList.remove('open');
        addProduct.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_updateKind.onclick = function (evt) {
        updateKind.classList.remove('open');
    }
    dropButtonKind.onclick = function (evt) {
        dropKind.classList.add('open');
        updateKind.classList.remove('open');
        updateCategory.classList.remove('open');
        dropCategory.classList.remove('open');
        addCategory.classList.remove('open');
        addKind.classList.remove('open');
        addProduct.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_dropKind.onclick = function (evt) {
        dropKind.classList.remove('open');
    }
    addButtonProduct.onclick = function (evt) {
        addProduct.classList.add('open');
        updateKind.classList.remove('open');
        updateCategory.classList.remove('open');
        dropCategory.classList.remove('open');
        addCategory.classList.remove('open');
        addKind.classList.remove('open');
        dropKind.classList.remove('open');
        dropProduct.classList.remove('open');
    }
    close_addProduct.onclick = function (evt) {
        addProduct.classList.remove('open');
    }
    dropButtonProduct.onclick = function (evt) {
        dropProduct.classList.add('open');
        addProduct.classList.remove('open');
        updateKind.classList.remove('open');
        updateCategory.classList.remove('open');
        dropCategory.classList.remove('open');
        addCategory.classList.remove('open');
        addKind.classList.remove('open');
        dropKind.classList.remove('open');
    }
    close_dropProduct.onclick = function (evt) {
        dropProduct.classList.remove('open');
    }
});
