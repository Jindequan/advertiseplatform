### It is
> a platform for manage advertise automatically

### It can
> create campaigns, plans, creatives .etc
> create them in different channel


```
src  
│
└───Abstracts                       //定义了通用类的抽象方法
│   │
│   └───AbstractFactory.php         //工厂类
│   │
│   └───AbstractParam.php           //入参类
│   │
│   └───AbstractProducer.php        //生产者类
│
└───Constants                       //常量类
│
└───Exception                       //异常处理类
│
└───Factory                         //具体工厂类，各广告平台的自定义类
│
└───Interfaces                      //接口定义
│   │
│   └───FactoryInterface            //各平台具体接口定义
│   │   │……
│   │   │
│   └───ProducerInterface           //具体生产者接口定义
│   │   │……
│   │   │
│   └───FactoryInterface.php        //工厂通用接口类
│   │
│   └───InitParamInterface.php      //初始化类时传参时，存取参数方法类
│   │
│   └───ParamInterface.php          //入参接口类
│   │
│   └───ProducerInterface.php       //生产者通用接口类
│
└───RequestBody                     //具体方法请求体类
│
└───Traits                          //traits
│
│
│
```