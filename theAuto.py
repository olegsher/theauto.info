from flask import Flask, render_template, json, request
from flask_mail import Mail, Message
import os

app = Flask(__name__)

mail_settings = {
    "MAIL_SERVER": 'smtp.gmail.com',
    "MAIL_PORT": 465,
    "MAIL_USE_TLS": False,
    "MAIL_USE_SSL": True,
    "MAIL_USERNAME": os.environ['EMAIL_USER'],
    "MAIL_PASSWORD": os.environ['EMAIL_PASSWORD']
}

app.config.update(mail_settings)
mail = Mail(app)

title = "Site title"
insurance_text_ru_CDW = """Дополнительная страховка (Super CDW) <br/>не обязательная и снижает ответственность арендатора до Нуля в случае ущерба автомобилю (т.е отменяет франшизу).
Приобрести данный вид страхования возможно только в дополнение к базовому полису(CDW/LDW & TP).
* Данный вид страхования не покрывает повреждения, нанесенные шинам, колесам, стеклам, крыше, а так же ходовой части автомобиля. Арендатор обязан выплатить полную сумму ущерба, нанесенного этим частям автомобиля."""

#Albar_Categories = ["B", "C", "D", "E"]
#Albar_json = json.dumps(Albar_Categories)


a = [
    ["B","MBMR",10,4," Suzuki Alto Man.",10,22,10,22,63,147,9,21,610,790,10,5,12,0.45,10,100,5,60,475  ],
    ["Q","EBAR",15,4," Fiat 500  (2 Doors)",10,22,10,22,63,147,9,21,610,790,10,5,12,0.45,10,100,5,60,475  ],
    ["C","EDAR",30,4," Kia Picanto ",11,23,11,23,70,154,10,22,620,800,10,5,12,0.45,10,100,5,60,475  ],
    ["D","CBAR",20,4," Hyundai i20 ",12,24,12,24,77,161,11,23,630,810,10,5,12,0.45,10,100,5,60,475  ],
    ["E","CCAR",50,5," Ford Fiesta ",13,25,13,25,84,168,12,24,645,825,10,5,12,0.45,10,100,5,60,475  ],
    ["F","IDAR",60,5," Hyundai Accent i25 ",16,28,16,28,98,182,14,26,750,930,11,5,12,0.5,10,100,5,60,475  ],
    ["I","SCAR",90,5," VW Golf ",18,30,18,30,112,196,16,28,790,970,11,5,12,0.5,10,100,5,60,475  ],
    ["IW","CWAR",91,5," Seat Leon SW ",20,32,20,32,126,210,18,30,820,1000,11,5,12,0.5,10,100,5,60,475  ],
    ["H","SDAR",80,5," VW Jetta ",24,36,24,36,154,238,22,34,960,1140,11,5,12,0.5,10,150,5,70,715  ],
    ["M","PDAR",130,5," Mazda 6 ",31,46,31,46,196,301,28,43,1050,1230,14,5,15,0.5,10,150,7,70,715  ],
    ["MH","PCAR",135,5," Hyundai Sonata ",42,57,42,57,266,371,38,53,1450,1630,14,5,15,0.75,10,150,7,70,715  ],
    ["K","UDAR",110,5," BMW 318i ",72,87,72,87,455,560,65,80,1590,1770,14,5,15,0.75,10,150,7,70,715  ],
    ["R","FCAR",180,5," VW Passat  ",58,73,58,73,364,469,52,67,1640,1820,14,5,15,0.75,15,210,10,90,960  ],
    ["P","LDAR",160,5," Nissan Maxima ",79,109,79,109,497,707,71,101,2170,2410,35,10,40,0.75,15,210,10,90,960  ],
    ["W","LCBR",230,5," Audi A6 ",122,152,122,152,770,980,110,140,2690,2930,35,10,40,0.75,15,210,10,90,960  ],
    ["FX","DBAR",65,5," Renault Megane Coupe (2 Doors) ",17,29,17,29,105,189,15,27,760,940,11,5,12,0.5,10,100,5,60,475  ],
    ["T","CPMR",200,5," VW Caddy Man. ",39,69,39,69,245,455,35,65,1050,1290,15,10,20,0.75,10,100,5,60,475  ],
    ["J","SFBR",100,5," Hyundai Tucson Aut. ",42,72,42,72,266,476,38,68,1240,1480,15,10,20,0.75,10,150,7,70,715  ],
    ["O","LFBR",150,5," Ford Edge Aut. ",74,104,74,104,469,679,67,97,2250,2550,35,10,40,0.75,15,210,10,90,960  ],
    ["U","IVAR",210,7," Opel Zafira Aut. ",39,69,39,69,245,455,35,65,1220,1520,15,10,20,0.75,15,210,10,90,715  ],
    ["V","SVAR",220,7," Mitsubishi Outlander Aut. ",58,88,58,88,364,574,52,82,1550,1850,15,10,20,0.75,15,210,10,90,960  ],
    ["V8","FVAR",225,8," Kia Carnival Aut. ",83,113,83,113,525,735,75,105,1870,2170,35,10,40,0.75,15,210,10,90,960  ],
    ["Y","FVMR",250,9," Renault Traffic Man. ",55,85,55,85,343,553,49,79,1600,1900,35,10,40,0.75,15,210,10,90,960  ],
    ["Z","LVAR",260,9," VW Transporter Aut. ",95,125,95,125,602,812,86,116,2120,2420,35,10,40,0.75,15,210,10,90,960  ]
]

branches_albar = json.dumps('branches_Albar.json')


# Russian site

@app.route('/')
def index():
    name = "Oleg"
    return render_template('__index.html')


@app.route('/about')
def about():
    # title = "About page"
    return render_template('__about.html')







@app.route('/RentalConditions')
def terms():
    return render_template('__RentalConditions.html')


@app.route('/faq-rent-car-israel')
def faq(): return render_template('__qa.html')