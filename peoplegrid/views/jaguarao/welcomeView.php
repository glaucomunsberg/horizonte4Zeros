<?$this->load->view('../../static/views/cabecalhoPublicoView')?>
<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>static/jqcloud/jqcloud-1.0.4.css" />
<script type="text/javascript" src="<?=BASE_URL?>static/jqcloud/jqcloud-1.0.4.js"></script>
<div class="container">
    <div class="row">
        <div class="span12">
            <div id="example" style="width: 550px; height: 350px;"></div>
        </div>
        
    </div>
    
</div>
<script type="text/javascript">
  /*!
   * Create an array of word objects, each representing a word in the cloud
   */
  var word_array = [
      {text: "11", weight: 15, html:{"onClick":"on()"},link:"#"},
      {text: "Horizonte", weight: 9, html:{id:"horizonte"},link:"#"},
      {text: "11", weight: 6, html: {title: "I can haz any html attribute"}},
      {text: "0", weight: 7},
      {text: "0", weight: 3},
      {text: "0", weight: 5},
      {text: "0", weight: 10},
      {text: "0", weight: 3},
      {text: "0", weight: 5},
      {text: "0", weight: 12},
      {text: "0", weight: 5},
      {text: "0", weight: 5},
      {text: "0", weight: 8},
      {text: "0", weight: 11},
      {text: "0", weight: 12},
      {text: "0", weight: 1},
      {text: "0", weight: 7},
      {text: "0", weight: 8},
      {text: "0", weight: 6}
      // ...as many words as you want
  ];

  $(function() {
    // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
    $("#example").jQCloud(word_array,{shape: "rectangular"});
  });
  
  var zeros = 0;
  /**
   * Função que faz a montagem do nome
   * 
   * @returns {undefined}
   */
  function on(){
      switch(zeros){
          case 0:
              
      }
  }
</script>


<?$this->load->view('../../static/views/rodapeView')?>