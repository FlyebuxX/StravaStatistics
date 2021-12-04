# ===============================================================================
# === IMPORTS
# ===============================================================================


from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By

import time
# ===============================================================================
# === FUCNTIONS
# ===============================================================================



def launch():
    """
    Launcher
    """

    driver.get("https://www.strava.com/dashboard")  # getting url

    # accepting cookies
    cookie = driver.find_element_by_class_name("btn-accept-cookie-banner")
    cookie.click()

    # email field
    link_email = driver.find_element_by_id("email")
    link_email.click()
    link_email.send_keys("valentin.eberhardt57@gmail.com")

    # password field
    link_password = driver.find_element_by_id("password")
    link_password.click()
    link_password.send_keys("Xoneye@4")

    # check
    button = driver.find_element_by_id("remember_me")
    button.click()

    # login
    loggin = driver.find_element_by_id("login-button")
    loggin.click()

    # activities
    driver.get("https://www.strava.com/athlete/training")

# ------------------ MAIN --------------------------------------


PATH = "C:\webdrivers\chromedriver.exe"
driver = webdriver.Chrome(PATH)
launch()

file = open("data.txt", "w", encoding="utf-8")
file.write("Sport;Jour;Date;Temps;Distance;Dénivelé;")
file.write("\n")
time.sleep(3)  # waiting for loading

wait = WebDriverWait(driver, 10)
while True:
    # grab the data
    time.sleep(3)
    container = driver.find_element_by_tag_name("tbody")
    cellules = container.find_elements_by_tag_name("td")

    activities = []
    content = ""
    for elt in cellules:
        if elt.text == "" or elt.text in "Modifier Supprimer Partager":
            activities.append(content)
            content = ""
        else:
            content += elt.text + ";"
    for elt in activities:
        file.write(elt + "\n")
    # click next link
    try:
        element = wait.until(EC.element_to_be_clickable((By.CLASS_NAME, 'next_page')))
        element.click()
    except:
        break
    

file.close()
driver.quit()
