##yii2/hashids
这个代码主要是为了Yii2更好的调用hashids/hashids的开源代码而开发的，在Yii2中得调用方式很简单  

* YII中config配置

```PHP
"components" => [
	"class" => "\yii2\object\Hashids",
	//本参数已经在"\yii2\object\Hashids"类中初始化，所以可以去掉
	"objectClass" => "\Hashids\Hashids",
	//该参数是objectClass类的__construct()方法的参数列表
	"initArgs" => [],
	//objectClass类的属性赋值对象
	"objectProperty" => []
]
```

* 除上述方法以外，可以调用yii2\object\Hashids的父类进行初始化，其父类更具有广泛用处，可以使很多非Yii组件的类，进而转换为yii的组件其调用格式类似上边介绍：  

```PHP
"components" => [  
	"class" => "\yii2\object\Transfer",
	//本参数需指定要转换的类
	"objectClass" => "\Hashids\Hashids",
	//该参数是objectClass类的__construct()方法的参数列表
	"initArgs" => [],
	//objectClass类的属性赋值对象
	"objectProperty" => []
]
```


