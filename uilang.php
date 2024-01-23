<?php
/*
Developed by Habibie
Email: habibieamrullah@gmail.com 
WhatsApp: 6287880334339
WebSite: https://webappdev.my.id
Donate: https://www.paypal.com/paypalme/habibieamrullah
*/
    
    //Portugues Brasil
    function translatePTBR(){
		global $language;
    global $rawword;
		//word definitions...
		$definitions = array(
			"A picture has been deleted." => "Uma imagem foi excluída.",
			"About" => "Sobre",
			"Home Thumbnail Mode" => "Modo thumbnail",
			"Center Filled" => "Preenchido ao centro",
			"Stretched Width or Height" => "Lebar atau Tinggi Tertarik",
			"Please fill all details." => "Preencha todos os dados.",
			"Add more options" => "Adicionar mais opções",
			"Add more picture" => "Adicionar mais imagens",
			"Add new item for this option" => "Adicionar novo item para esta opção",
			"Add new option title:" => "Adicionar novo título para a opção",
			"Add to Cart" => "Adicionar ao carrinho",
			"Add" => "Adicionar",
			"Clear Cart" => "Limpar carrinho",
			"Order on WhatsApp" => "Pedir pelo WhatsApp",
			"Back to Shop" => "Voltar à loja",
			"Add Product" => "Adicionar produto",
			"Additional Images" => "Imagens adicionais",
			"Address" => "Endereço",
			"Delivery Address" => "Endereço de entrega",
			"Admin WhatsApp Phone Number" => "Número de WhatsApp do administrador",
			"All" => "Tudo",
			"Back" => "Voltar",
			"Base URL (make sure to include '/' symbol at the end)" => "URL base (inclua '/' no final)",
			"Base URL" => "URL base",
			"Categories" => "Categorias",
			"Category updated" => "Categoria atualizada",
			"Category" => "Categoria",
			"Close" => "Fechar",
			"Disable Decimals" => "Desativar decimais",
			"Congratulation!" => "Parabéns!",
			"Contact Information" => "Informações de contato",
			"Content" => "Conteúdo",
			"Continue" => "Continua",
			"Currency Symbol" => "Símbolo monetário",
			"Date" => "Data",
			"Delete" => "Apagar",
			"Delivery Method" => "Método de entrega",
			"Developed by" => "Desenvolvido por",
			"Discount Price" => "Preço com desconto",
			"Edit Post" => "Editar postagem",
			"Edit" => "Editar",
			"Email" => "Endereço de E-Mail",
			"Enable Facebook Comment?" => "Ativar comentários no Facebook?",
			"Enable Recent Posts Slider?" => "Ativar Slider de postagens recentes?",
			"Enter new name for category" => "Novo nome da categoria",
			"Error during uploading. Try again" => "Erro durante o envio. Tente novamente",
			"File is not valid. Please try again" => "Arquivo não é válido. Por favor, tente novamente",
			"Hi" => "Olá",
			"Home" => "Início",
			"I would like to order:" => "Eu gostaria de pedir:",
			"Icon upload is OK" => "Ícone enviado com sucesso",
			"Image File" => "Arquivo de imagem",
			"Language" => "Idioma",
			"Login success!" => "Login com sucesso!",
			"Login" => "Login",
			"Logo upload is OK" => "Logo enviado com sucesso",
			"Logout" => "Sair",
			"MORE" => "Mais",
			"Main Color" => "Cor principal",
			"Mobile" => "Celular",
			"More in" => "Mais em",
			"More picture(s) has been added." => "Mais imagens foram adicionadas.",
			"More" => "Mais",
			"Name" => "Nome",
			"New Post" => "Nova postagem",
			"New category has been added" => "Categoria baru telah ditambahkan",
			"New category" => "Nova categoria",
			"New post has been published. Click" => "Nova postagem foi publicada. Clique",
			"No category has been added" => "Nenhuma categoria foi adicionada",
			"No" => "Não",
			"Notes" => "Observações",
			"Nothing found" => "Não encontrado",
			"Oh no..." => "Oh não...",
			"One category removed" => "Uma categoria foi removida",
			"Option Title" => "Título da opção",
			"Option" => "Opção",
			"Order Items" => "Itens do pedido",
			"Order Now" => "Enviar pedido",
			"Order" => "Pedido",
			"Orders" => "Pedidos",
			"Orders" => "Pedidos",
			"Picture upload is OK" => "Imagem enviada com sucesso",
			"Pictures" => "Imagens",
			"Post successfully updated." => "Postagem atualizada com sucesso.",
			"Price" => "Preço",
			"Product price when this option is selected" => "Preço do produto quando esta opção for selecionada",
			"Published Posts" => "Postagens publicadas",
			"Quantity" => "Quantidade",
			"Recently Published" => "Publicados recentemente",
			"Search result for" => "Resultados da pesquisa por",
			"Search" => "Pesquisar",
			"Enable Publish Date?" => "Ativar data da publicação?",
			"Secondary Color" => "Cor secundária",
			"Settings updated!" => "Configurações atualizadas!",
			"Settings" => "Configurações",
			"Share Buttons Option" => "Opção dos botões de compartilhamento",
			"Shopping Cart" => "Carrinho de compras",
			"Submit" => "Enviar",
			"Thank you." => "Muito obrigado!",
			"There is no category published." => "Nenhuma categoria publicada",
			"There is no option has been added." => "Nenhuma opção foi adicionada.",
			"There is no order recorded." => "Nenhum pedido gravado.",
			"There is no post published" => "Nenhuma postagem publicada",
			"Title" => "Título",
			"Total" => "Total",
			"Type something..." => "Digite algo...",
			"Uncategorized" => "Sem categoria",
			"Update" => "Atualizar",
			"Upload progress" => "Progresso do envio",
			"Video File" => "Arquivo de vídeo",
			"Video upload is OK" => "Vídeo enviado com sucesso",
			"Views" => "Visualizações",
			"WELCOME!\nClick OK to start.\nIf this message appears again, please check that you have correct database connection." => "BEM VINDO!\nClique OK para iniciar.\nSe esta mensagem aparecer novamente, por favor verifique sua conexão com o banco de dados.",
			"Website Icon (.ico file)" => "Ícone do site (.ico)",
			"Website Title" => "Título do site",
			"Write some notes..." => "Escreva alguma coisa...",
			"Yes" => "Sim",
			"You did not add any product." => "Você não adicionou qualquer produto.",
			"You did not submit your post correctly. Click" => "Você não enviou sua postagem corretamente. Clique",
			"You may like:" => "Você pode gostar:",
			"has been deleted" => "foi apagado",
			"here" => "aqui",
			"Order Notes" => "Observações",
			"to try again" => "tente novamente",
			"to view it" => "para ver",
		);
		
		return proceedTranslation($definitions, $rawword);
		
    }
    //Bahasa Indonesia
    function translateId(){
		global $language;
        global $rawword;
		//word definitions...
		$definitions = array(
			"A picture has been deleted." => "Sebuah gambar telah dihapus.",
			"About" => "Tentang",
			"Home Thumbnail Mode" => "Mode Thumbnail Halaman Utama",
			"Center Filled" => "Penuh dari Tengah",
			"Stretched Width or Height" => "Lebar atau Tinggi Tertarik",
			"Please fill all details." => "Tolong isi semuanya.",
			"Add more options" => "Tambahkan opsi",
			"Add more picture" => "Tambahkan gambar lain",
			"Add new item for this option" => "Tambahkan item untuk opsi ini",
			"Add new option title:" => "Tambah judul opsi baru",
			"Add to Cart" => "Tambah ke Keranjang",
			"Add" => "Tambah",
			"Clear Cart" => "Kosongkan Keranjang",
			"Order on WhatsApp" => "Pesan Lewat WhatsApp",
			"Back to Shop" => "Kembali ke Toko",
			"Add Product" => "Tambah Produk",
			"Additional Images" => "Gambar Tambahan",
			"Address" => "Alamat",
			"Delivery Address" => "Alamat Pengiriman",
			"Admin WhatsApp Phone Number" => "Nomor hape Admin dengan WhatsApp aktif",
			"All" => "Semua",
			"Back" => "Kembali",
			"Base URL (make sure to include '/' symbol at the end)" => "URL Dasar (pastikan Anda tambahkan simbol '/' di akhir)",
			"Base URL" => "URL Dasar",
			"Categories" => "Categoria",
			"Category updated" => "Categoria telah diperbarui",
			"Category" => "Categoria",
			"Close" => "Tutup",
			"Disable Decimals" => "Sembunyikan Desimal",
			"Congratulation!" => "Selamat!",
			"Contact Information" => "Informações de contato",
			"Content" => "Konten",
			"Continue" => "Lanjut",
			"Currency Symbol" => "Simbol Mata Uang",
			"Date" => "Tanggal",
			"Delete" => "Hapus",
			"Delivery Method" => "Metode Pengiriman",
			"Developed by" => "Dikembangkan oleh",
			"Discount Price" => "Discount Harga",
			"Edit Post" => "Perbarui Pos",
			"Edit" => "Ubah",
			"Email" => "Alamat Email",
			"Enable Facebook Comment?" => "Aktifkan Komentar Facebook?",
			"Enable Recent Posts Slider?" => "Aktifkan slider untuk produk-produk terbaru?",
			"Enter new name for category" => "Nama Categoria baru untuk",
			"Error during uploading. Try again" => "Terjadi kesalahan saatu mengunggah file. Coba lagi",
			"File is not valid. Please try again" => "File tidak valid. Coba lagi",
			"Hi" => "Halo",
			"Home" => "Beranda",
			"I would like to order:" => "Saya ingin order:",
			"Icon upload is OK" => "Unggah Ikon OK",
			"Image File" => "File Gambar",
			"Language" => "Bahasa",
			"Login success!" => "Login sukses!",
			"Login" => "Masuk",
			"Logo upload is OK" => "Unggah logo OK",
			"Logout" => "Keluar",
			"MORE" => "LIHAT",
			"Main Color" => "Warna Utama",
			"Mobile" => "Hape",
			"More in" => "Lainnya di",
			"More picture(s) has been added." => "Gambar tambahan sudah diunggah.",
			"More" => "Mais",
			"Name" => "Nome",
			"New Post" => "Tambah Baru",
			"New category has been added" => "Categoria baru telah ditambahkan",
			"New category" => "Categoria baru",
			"New post has been published. Click" => "Pos baru berhasil diterbitkan. Klik",
			"No category has been added" => "Belum ada Categoria yang sudah ditambahkan",
			"No" => "Tidak",
			"Notes" => "Catatan",
			"Nothing found" => "Tidak ditemukan apapun",
			"Oh no..." => "Oh tidak...",
			"One category removed" => "Satu Categoria telah dihapus",
			"Option Title" => "Judul Opsi",
			"Option" => "Opsi",
			"Order Items" => "Produk yang Dibeli",
			"Order Now" => "Pesan Sekarang",
			"Order" => "Pesanan",
			"Orders" => "Pesanan masuk",
			"Orders" => "Pesanan",
			"Picture upload is OK" => "Unggah Gambar OK",
			"Pictures" => "Gambar",
			"Post successfully updated." => "Pos berhasil diperbarui",
			"Price" => "Harga",
			"Product price when this option is selected" => "Harga produk saat opsi ini dipilih",
			"Published Posts" => "Telah Terbit",
			"Quantity" => "Jumlah",
			"Recently Published" => "Baru Ditambahkan",
			"Search result for" => "Hasil pencarian kata",
			"Search" => "Cari",
			"Enable Publish Date?" => "Aktifkan Tanggal Terbit?",
			"Secondary Color" => "Warna Kedua",
			"Settings updated!" => "Pengaturan telah diperbarui!",
			"Settings" => "Pengaturan",
			"Share Buttons Option" => "Opsi tombol share",
			"Shopping Cart" => "Keranjang Belanja",
			"Submit" => "Tambahkan",
			"Thank you." => "Terima kasih.",
			"There is no category published." => "Belum ada Categoria yang ditambahkan",
			"There is no option has been added." => "Belum ada opsi yang ditambahkan.",
			"There is no order recorded." => "Belum ada order masuk.",
			"There is no post published" => "Belum ada konten",
			"Title" => "Judul",
			"Total" => "Total Semua",
			"Type something..." => "Ketik sesuatu...",
			"Uncategorized" => "Sem categoria",
			"Update" => "Atualizar",
			"Upload progress" => "Progresso do envio",
			"Video File" => "Arquivo de video",
			"Video upload is OK" => "Video enviado com sucesso",
			"Views" => "Visualizações",
			"WELCOME!\nClick OK to start.\nIf this message appears again, please check that you have correct database connection." => "Bem vindo!\nClique em OK para iniciar.\nSe esta mensagem aparecer novamente, por favor verifique a configuração do banco de dados.",
			"Website Icon (.ico file)" => "Ikon Situs (file .ico)",
			"Website Title" => "Judul Situs",
			"Write some notes..." => "Tulis catatan untuk penjual...",
			"Yes" => "Ya",
			"You did not add any product." => "Anda belum menambahkan produk apapun.",
			"You did not submit your post correctly. Click" => "Anda tidak memposting konten dengan benar. Klik",
			"You may like:" => "Mungkin Anda tertarik:",
			"has been deleted" => "telah dihapus",
			"here" => "di sini",
			"Order Notes" => "Catatan",
			"to try again" => "untuk mencoba lagi",
			"to view it" => "untuk melihatnya",
		);
		
		return proceedTranslation($definitions, $rawword);
		
    }
	
	//proceed translation
	function proceedTranslation($definitions, $rawword){
		$translation = "[untranslated]";
		$keys = array_keys($definitions); 
		for($x = 0; $x < count($keys); $x++ ) { 
			if($keys[$x] == $rawword)
				$translation = $definitions[$keys[$x]];
		}
		return $translation;
	}
    
    $rawword;
    function uilang($txt){
        global $language;
        global $rawword;
        $rawword = $txt;
        switch($language){
            case "id" :
                return translateId();
                break;
            case "pt_br" :
                return translatePTBR();
                break;
            default :
                return $txt;
                break;
        }
    }
    
    function tt($txt1, $txt2){
        global $language;
        global $rawword;
        if($rawword == $txt1){
            return $txt2;
        }
    }
    
?>
