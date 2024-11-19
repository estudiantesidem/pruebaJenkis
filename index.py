from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from webdriver_manager.chrome import ChromeDriverManager  # Para gestionar el ChromeDriver automáticamente
import time

driver = webdriver.Chrome()

# Abre YouTube
driver.get("https://www.youtube.com")

time.sleep(2)

search_box = driver.find_element(By.NAME, "search_query")

search_query = "python tutorial"
search_box.send_keys(search_query)

search_box.send_keys(Keys.RETURN)

time.sleep(3)

videos = driver.find_elements(By.XPATH, '//*[@id="video-title"]')

for i, video in enumerate(videos[:5]):
    print(f"{i+1}. {video.text} - {video.get_attribute('href')}")

driver.quit()
