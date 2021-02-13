# -*- coding: utf-8 -*-
__author__ = 'JLPlata'

import sys
from bs4 import BeautifulSoup
import requests

sec = sys.argv[1]
#ingrso la url
URL_BASE = "https://www.scoresandodds.com/"+sec+"/teams"

MAX_PAGES = 20
counter = 0

for i in range(1, MAX_PAGES):

    # Construyo la URL
    if i > 1:
        url = "%spage/%d/" % (URL_BASE, i)
    else:
        url = URL_BASE

    # Realizamos la petición a la web
    req = requests.get(url)
    # Comprobamos que la petición nos devuelve un Status Code = 200
    statusCode = req.status_code
    if statusCode == 200:

        # Pasamos el contenido HTML de la web a un objeto BeautifulSoup()
        html = BeautifulSoup(req.text, "html.parser")

        # se busca mediante segun el elemetno (class, div, p, ...)
        entradas = html.find('div', {'class': 'container'})

        # Imprimo el Título, Autor y Fecha de las entradas
        if not entradas:
            print ("")
        else:
            print (entradas)
            break
        
    else:
        print("")
        break