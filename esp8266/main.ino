/* Ecanteen with RC522,lcd 16x2 
 *  Made by anandadwipra
 *  Github : https://github.com/anandadwipra
 *  Thanks to : Rui Santos and Miliohm
 */
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
#include <SPI.h>
#include <MFRC522.h>
#include <LiquidCrystal_I2C.h>


constexpr uint8_t RST_PIN = D3;     // Configurable, see typical pin layout above
constexpr uint8_t SS_PIN = D4;     // Configurable, see typical pin layout above
const unsigned char buzzer = 16;

MFRC522 rfid(SS_PIN, RST_PIN); // Instance of the class
MFRC522::MIFARE_Key key;

String tag;
const char* ssid = "Esp8266";
const char* password = "12345678xi";
//Your Domain name with URL path or IP address with path
String serverName = "http://192.168.51.19/api/canteen/";
int lcdColumns = 16;
int lcdRows = 2;
LiquidCrystal_I2C lcd(0x27, lcdColumns, lcdRows);  




void setup() {
  Serial.begin(115200); 
  
  pinMode (buzzer,OUTPUT) ;
  
  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());


  SPI.begin(); // Init SPI bus
  rfid.PCD_Init(); // Init MFRC522

  // initialize LCD
  lcd.init();
  // turn on LCD backlight                      
  lcd.backlight();
  lcd.setCursor(0,0);
  lcd.print("  Preparing . ");
  delay(100);
  lcd.clear();
  lcd.print("  Preparing .. ");
  delay(1100);
  lcd.clear();
  lcd.print("  Preparing ... ");
  delay(2000);
  lcd.clear();
  lcd.print("  Preparing .... ");
  delay(1300);
  lcd.clear();
}

void loop() {
    //Check WiFi connection status
    if(WiFi.status()== WL_CONNECTED){
      lcd.setCursor(0, 0);
      lcd.print("   E-canteen!");
      lcd.setCursor(0, 1);
      lcd.print(" Dekatkan Kartu!");
      if ( ! rfid.PICC_IsNewCardPresent())
        return;
      if (rfid.PICC_ReadCardSerial()) {
        for (byte i = 0; i < 4; i++) {
            tag += rfid.uid.uidByte[i];
        }
      Serial.println(tag);
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("   E-canteen!");
      lcd.setCursor(0,1);
      lcd.print("  Scanning ..");
      digitalWrite(buzzer,HIGH);
      delay(1000);
      digitalWrite(buzzer,LOW);
      WiFiClient client;
      HTTPClient http;

      String serverPath = serverName + tag;
      
      // Your Domain name with URL path or IP address with path
      http.begin(client, serverPath.c_str());
      
      // Send HTTP GET request
      int httpResponseCode = http.GET();

      if (httpResponseCode>0) {
        Serial.print("HTTP Response code: ");
        Serial.println(httpResponseCode);
        String payload = http.getString();
        Serial.println(payload);
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("   E-canteen!");
        lcd.setCursor(0,1);
        lcd.print(payload);
      }
      else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("   E-canteen!");
        lcd.setCursor(0,1);
        lcd.print("Wifi Disconnected");
      }
      // Free resources
      http.end();


      
      tag = "";
      rfid.PICC_HaltA();
      rfid.PCD_StopCrypto1();
      delay(2000);
      }

    }
    else {
      Serial.println("WiFi Disconnected");
      lcd.setCursor(0,1);
      lcd.print("Wifi Disconnected");
      delay(3000);
    }
    lcd.clear();
}
