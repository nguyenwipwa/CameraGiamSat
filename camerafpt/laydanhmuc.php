<?php
    set_time_limit(0);
    require_once 'connection.php';
    require "simple_html_dom.php";

    $db = new DB_Connection();
    $connection = $db->get_connection();
    $url = "http://fptcamera.vn/";
    //microsoft
    
    $html = file_get_html($url);
	
	// echo $html;

    $category = $html->find("ul[class=main-page equalheightbanner]",0);
    getChildren($category, 8, $connection);
    $connection->close();

    function getChildren($category, $number, $connection){
        for($i=0; $i<$number; $i++){
            $the_li = $category->find("ul",0)->children($i);
            $the_a = $the_li->children(0);
            $the_ul = $the_li->children(1);
            $the_ul->class ="goc";

            // Xu ly the a
            $name = $the_a->find("span",0)->text();
            $href = $the_a->href;
            echo "Name cap 1: ".$name." ----------  Href: ".$href;
            echo "<br/>";

            $sql = "INSERT INTO category VALUES (NULL, '$name', 0, 1, 1, '$href')";
            insert($connection, $sql);
            $id_root = $connection->insert_id;
            // End Xu ly the a

            //Cap 2
            $html2 = file_get_html($href);
            $arr2 = $html2->find("div.body", 0);
            foreach ($arr2->find("a.sort_list") as $key) {
                $name2 = $key->text();
                $href = $key->href;
                echo "-+Name cap2:".$name2;
                echo "<br/>";
                $sql = "INSERT INTO category VALUES (NULL, '$name2', $id_root, 1, 0, '$href')";
                insert($connection, $sql);
                $id_cap2 = $connection->insert_id;

                $html3 = file_get_html($key->href);
                $arr3 = $html3->find("div.body", 0);
                if($arr3 !=null)
                foreach ($arr3->find("a.sort_list") as $key) {
                    $name3 = $key->text();
                    $href = $key->href;
                    echo "---Name cap3:".$key->text();
                    echo "<br/>";
                    $sql = "INSERT INTO category VALUES (NULL, '$name3', $id_cap2, 1, 0, '$href')";
                    insert($connection, $sql);
                    // echo $key;
                    // $htmlProduct = file_get_html($key->href);
                    // //product
                    // $arrProduct = $htmlProduct->find("div[class=thumbnail products]",0);
                    // echo $arrProduct;


                }
            }
            //end cap2
          
            echo "<br/>-------------------------------------------<br/>";
        }
    }
    function insert( $connection,$query){
        $result = mysqli_query($connection,$query);
        echo $result;
    }
?>