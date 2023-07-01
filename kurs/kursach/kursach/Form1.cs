using System;
using System.Windows.Forms;
using System.IO;
using System.Net;

namespace kursach
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void webBrowser1_DocumentCompleted(object sender, WebBrowserDocumentCompletedEventArgs e)
        {
          
        }

        private void button1_Click(object sender, EventArgs e)
        {
            webBrowser1.Navigate(url.Text);
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            int size = -1;
            OpenFileDialog openFileDialog1 = new OpenFileDialog();
            DialogResult result = openFileDialog1.ShowDialog(); // диалог
            if (result == DialogResult.OK) // тест.
            {
                string file = openFileDialog1.FileName;
                try
                {
                    string text = File.ReadAllText(file);
                    size = text.Length;
                    WebClient wb = new WebClient();
                    { // wb.UploadFile(url.Text, file); не получилось
                        wb.UploadFile(url.Text, "POST", @file);
                        webBrowser1.Navigate(url.Text);
                    }
                    
                }
                catch (IOException)
                {
                }

            }
            Console.WriteLine(size); // <-- показывает размер
            Console.WriteLine(result); // <-- отладка результат
            
        }
    }   
}
        