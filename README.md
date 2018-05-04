# RandomGenerator

#亂數產生器

可取得數字亂數、文字亂數、以及文字數字混和亂數

建立物件
new RandomGenerator();

調用文字函數取得文字亂數

GetRandomString();   //文字亂數 (預設10碼)

也可填入參數獲取相對應字數亂數

GetRandomString(5);



調用數字函數取得數字亂數

GetRandomInt();      //數字亂數 (預設5碼)

可填入參數獲取相對應字數亂數,參數最大值為10碼

GetRandomInt(8);


調用文字+數字函數取得混和亂數

Random();           //數字+文字亂數(預設10碼,文字8碼 數字2碼)

也可填入參數取得相對應字數亂數

Random(10,5); 
