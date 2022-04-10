project_name = "web_scraping_rotten_tomatoes"
import MySQLdb
import requests
import lxml
from bs4 import BeautifulSoup
#SQL connection data to connect and save the data in
HOST = "localhost"
USERNAME = "root"
PASSWORD = ""
DATABASE = "bollywood"
base_site = "https://editorial.rottentomatoes.com/guide/140-essential-action-movies-to-watch-now/"


def get_soup(base_site):
    headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36)'}
    response = requests.get(base_site, headers=headers)
    print(response.status_code)
    doc1 = BeautifulSoup(response.text)
    return doc1
soup = get_soup(base_site)
# print(soup.prettify())
title_tag = soup.title
# title_tag
# type(title_tag)
title_tag.text.strip()
# soup.body.h2
soup.body.h2.text
action_movies_url = soup.find_all(["h2"])[:5]
# action_movies_url
action_movies_url[0]('a')[0]['href']
# div = soup.find_all('div')
# len(div)
divs = soup.find_all("div", {"class": "col-sm-18 col-full-xs countdown-item-content"})
len(divs)
# divs = soup.find_all("div", {"class": "col-sm-18 col-full-xs countdown-item-content"})
# divs[:5]
# extract movie title and names
divs[0].text.replace('\n', '').strip()
divs[0]("h2")
# Extracting all 'h2' tags
headings = []
for div in divs:
    headings.append(div.find("h2"))

print(headings)
headings[0].find("a").text
a_tag = headings[0].find("a")
print(a_tag)
d = a_tag.attrs
print(d)
print(d['href']) #a_tag.attrs
for link in soup.find_all('a'):
    print(link.get('href'))
headings[0].find("span", {"class": 'start-year'}).text
divs[0].text.replace('\n', '').strip()
headings[0].find("span", {"class": 'tMeterScore'}).text
soup.body.h2.a['href']

################################################################################
# Inspecting the text inside the headings by creating 4 lists
def get_tag(headings):
    titles = []
    years = []
    scores = []
    urls = []
    for heading in headings:
        title = heading.find("a").text
        year = heading.find("span", {"class": 'start-year'}).text
        score = heading.find("span", {"class": 'tMeterScore'}).text
        url = heading.find('a')['href']
        titles.append(title)
        years.append(year)
        scores.append(score)   
        urls.append(url)
    return titles, years, scores, urls
tags = get_tag(headings)
print(tags)
titles = tags[0][:5]
titles
years = tags[1][:5]
years
scores = tags[2][:5]
scores
urls = tags[3][:5]
urls
movies_dict = {
    'title': tags[0],
    'year': tags[1],
    'score': tags[2],
    'url': tags[3],
}
print(movies_dict)
import pandas as pd
movies_df = pd.DataFrame(movies_dict)
movies_df
movies_df.to_csv('movies.csv', index=None)
