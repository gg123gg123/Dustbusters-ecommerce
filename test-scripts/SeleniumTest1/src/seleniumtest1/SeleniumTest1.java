
package seleniumtest1;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.safari.SafariDriver;


public class SeleniumTest1 {

    
    
    public static void main(String[] args) {
    WebDriver driver = new SafariDriver();
    driver.get("http://localhost:8080");
    
    }
    
}
