<?php
require_once ("header.tpl.php");

// Руками подключаю классы
require_once ("lib/article.lib.php"); 

?>
<body>

	<main>
		Тут центральное тело страницы
		
		<section>

			<?php 
				for ($i = 0; $i < 4; $i++)
				{
					$a[$i] = new Article();
					$a[$i]->header = $i;
				}

            for ($i = 0; $i < 4; $i++)
            {
                $a[$i]->Print();
            }

			?>

		</section>
		
		
	</main>
</body>
<?php