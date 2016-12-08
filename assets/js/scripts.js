

jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
   // $.backstretch("assets/img/backgrounds/1.jpg");
    
    /*
        Form validation
    */
    $(' .login-form input[name="nome"], .login-form textarea, .login-form p[name = "nome"]').on('focus', function() {
    	$(this).removeClass('input-error');
        $('p[name = "nome"]').addClass('pcontato');
        $('p[name = "nome"]').removeClass('validacao');
   
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[name= "nome"], textarea, p[name = "nome"]').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error')
                 $('p[name = "nome"]').addClass('validacao');
                $('p[name = "nome"]').removeClass('pcontato');
             
    		}
    		else {
    			$(this).removeClass('input-error');
                 $('p[name = "nome"]').addClass('pcontato');
                $('p[name = "nome]').removeClass('validacao');
                
    		}
    	});

    });


    //idade
     $(' .login-form input[name="idade"], p[name = "idade"]').on('focus', function() {
        $(this).removeClass('input-error');
        $('p[name = "idade"]').removeClass('validacao');
        $('p[name = "idade"]').addClass('pcontato');
    });
    
    $('.login-form').on('submit', function(e) {
        
        $(this).find('input[name= "idade"], p[name = "idade"]').each(function(){
            if( $(this).val() == "" ) {
                e.preventDefault();
                $(this).addClass('input-error')
                $('p[name = "idade"]').addClass('validacao');
                $('p[name = "idade"]').removeClass('pcontato');

            }
            else {
                $(this).removeClass('input-error');
                $('p[name = "idade"]').removeClass('validacao');
                 $('p[name = "idade"]').addClass('pcontato');
            }
        });

    });

    //CPF
    //idade
     $(' .login-form input[name="cpf"], p[name = "cpf"]').on('focus', function() {
        $(this).removeClass('input-error');
        $('p[name = "cpf"]').removeClass('validacao');
        $('p[name = "cpf"]').addClass('pcontato');
        
    });
    
    $('.login-form').on('submit', function(e) {
        
        $(this).find('input[name= "cpf"], p[name = "cpf"]').each(function(){
            if( $(this).val() == "" ) {
                e.preventDefault();
                $(this).addClass('input-error')
                $('p[name = "cpf"]').addClass('validacao');
                $('p[name = "cpf"]').removeClass('pcontato');
              
            }
            else {
                $(this).removeClass('input-error');
                $('p[name = "cpf"]').removeClass('validacao');
                 $('p[name = "cpf"]').addClass('pcontato');
            }
        });

    });
   

    $('.login-form').on('submit', function(e) {
        
          
                if( $('input[name= "cpf"] ').val() == "" ) {
                   alert("Preencher campo(s) obrigatório(s)");
                }       
            
               else  if( $('input[name= "idade"] ').val() == "" ) {
                   alert("Preencher campo(s) obrigatório(s)");
                }  

                else  if( $('input[name= "nome"] ').val() == "" ) {
                   alert("Preencher campo(s) obrigatório(s)");
                }  
    });

    
});


