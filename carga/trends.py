# -*- coding: utf-8 -*-
__author__ = 'JLPlata'

import sys
from bs4 import BeautifulSoup
import requests

#ingrso la url
URL_BASE = "https://www.scoresandodds.com/top-stats-trends"

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
        entradas = html.find('section', {'class': 'page-body canvas'})

        # Imprimo el Título, Autor y Fecha de las entradas
        if not entradas:
            print ("")
        else:
            print (entradas)
            break
        
    else:
        print("")
        break