/* 
 * Glauco Roberto Munsberg dos Santos
 * 
 * Este é o arquivo que contém todas as funções básicas
 *  necessárias para o funcionamento do sistema peopleGrid 
 * 
 */


/**
 * creatrGrid é o comando cria uma grid
 *  na dimensao sizeWXsizeH, tal que ela 
 *  estará vinculada na div cont
 * @param {type} sizeW
 * @param {type} sizeH
 * @param {type} nomePai
 * @returns {undefined}
 */
function createGrid(name , sizeW, sizeH, nomePai, rate) {
    
    var dif = Math.abs(sizeW-sizeH);
    var ratioW = sizeW,
        ratioH = sizeH, cont = 0;
    var parent = $('<div />', {
        class: 'grid',
        id: name,
        width: (sizeW / rate)  * sizeW,
        height: (sizeH / rate)  * sizeH
    }).addClass('grid').appendTo('.'+nomePai);
    
    for (var i = 0; i < sizeW; i++) {
        // se os sizes não são quadrados deve-se somar a diferenca
        //  para toda a imagem ser preenchida
        for(var p = 0; p < sizeH+dif; p++){
            $('<div />', {
                id: cont,
                width: (sizeH / rate) - 1,
                height: (sizeH / rate) -1
            }).appendTo(parent);
            cont++;
        }
    }
}
