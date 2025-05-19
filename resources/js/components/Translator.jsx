import React, { useState } from 'react';

const Translator = () => {
    const [inputText, setInputText] = useState('');
    const [translatedText, setTranslatedText] = useState('');
    const [loading, setLoading] = useState(false);
    
    const handleTranslation = async () => {
        if (!inputText.trim()) return;
        
        try {
            setLoading(true);
            
            // Using LibreTranslate API (free and open source)
            const response = await fetch('https://libretranslate.de/translate', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    q: inputText,
                    source: 'id', // Indonesian
                    target: 'en', // English
                }),
            });
            
            if (!response.ok) {
                throw new Error('Translation request failed');
            }
            
            const data = await response.json();
            setTranslatedText(data.translatedText);
        } catch (error) {
            console.error('Translation error:', error);
            setTranslatedText('Error occurred during translation. Please try again.');
        } finally {
            setLoading(false);
        }
    };
    
    return (
        <div className="translator-container p-4 border rounded-lg bg-white shadow">
            <h2 className="text-xl font-bold mb-4">Indonesian to English Translator</h2>
            
            <div className="mb-4">
                <label htmlFor="input-text" className="block text-gray-700 text-sm font-bold mb-2">
                    Indonesian Text
                </label>
                <textarea
                    id="input-text"
                    className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    rows="4"
                    placeholder="Enter Indonesian text here..."
                    value={inputText}
                    onChange={(e) => setInputText(e.target.value)}
                />
            </div>
            
            <div className="mb-4">
                <button
                    className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                    onClick={handleTranslation}
                    disabled={loading || !inputText.trim()}
                >
                    {loading ? 'Translating...' : 'Translate to English'}
                </button>
            </div>
            
            <div>
                <label htmlFor="output-text" className="block text-gray-700 text-sm font-bold mb-2">
                    English Translation
                </label>
                <div
                    id="output-text"
                    className="shadow border rounded w-full py-2 px-3 text-gray-700 bg-gray-50 min-h-[100px]"
                >
                    {translatedText || 'Translation will appear here...'}
                </div>
            </div>
        </div>
    );
};

export default Translator;
